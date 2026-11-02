<?php

namespace App\Filament\Forms\Components;

use App\Models\PaymentType;
use Filament\Forms;
use Filament\Notifications\Notification;

class PaymentTypeSelect
{
    /**
     * Payment type dropdown with a "+" button to add a new type on the fly.
     */
    public static function make(string $name = 'payment_type'): Forms\Components\Select
    {
        return Forms\Components\Select::make($name)
            ->label('Payment Type')
            ->options(fn () => PaymentType::options())
            ->required()
            ->searchable()
            ->native(false)
            ->helperText("Can't find the type? Click + to add a new one.")
            ->createOptionForm([
                Forms\Components\TextInput::make('name')
                    ->label('New Payment Type')
                    ->required()
                    ->maxLength(255)
                    ->placeholder('e.g. Physiotherapy'),
            ])
            ->createOptionModalHeading('Add Payment Type')
            ->createOptionUsing(fn (array $data): string => PaymentType::findOrCreateByName($data['name']))
            ->editOptionForm([
                Forms\Components\TextInput::make('name')
                    ->label('Payment Type Name')
                    ->required()
                    ->maxLength(255)
                    ->helperText('Renaming also updates every existing payment that uses this type.'),
            ])
            ->editOptionModalHeading('Edit Payment Type')
            ->fillEditOptionActionFormUsing(fn (Forms\Components\Select $component): array => [
                'name' => $component->getState(),
            ])
            ->updateOptionUsing(function (array $data, Forms\Components\Select $component): void {
                $oldName = $component->getState();
                $newName = trim($data['name']);

                $clash = PaymentType::whereRaw('LOWER(name) = ?', [mb_strtolower($newName)])
                    ->where('name', '!=', $oldName)
                    ->exists();

                if ($clash) {
                    Notification::make()
                        ->title('Already Exists')
                        ->danger()
                        ->body("A payment type named \"{$newName}\" already exists. Select it from the list instead.")
                        ->send();

                    return;
                }

                // Older payments may hold a type that was never in the table
                $type = PaymentType::firstOrCreate(['name' => $oldName]);
                $type->rename($newName);

                $component->state($newName);
            });
    }
}
