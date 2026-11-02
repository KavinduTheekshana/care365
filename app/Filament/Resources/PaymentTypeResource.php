<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentTypeResource\Pages;
use App\Models\PaymentType;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Model;

class PaymentTypeResource extends Resource
{
    protected static ?string $model = PaymentType::class;

    protected static ?string $navigationIcon = 'heroicon-o-tag';

    protected static ?string $navigationLabel = 'Payment Types';

    protected static ?string $navigationGroup = 'Finance';

    protected static ?int $navigationSort = 3;

    public static function canViewAny(): bool
    {
        return auth()->user()->hasAnyRole(['admin', 'manager']);
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Payment Type')
                    ->required()
                    ->maxLength(255)
                    ->unique(ignoreRecord: true)
                    ->placeholder('e.g. Physiotherapy')
                    ->helperText('Renaming also updates every existing payment that uses this type.')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('name')
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Payment Type')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('payments_count')
                    ->label('Used In Payments')
                    ->state(fn (PaymentType $record) => $record->paymentsCount())
                    ->badge()
                    ->alignCenter(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Last Updated')
                    ->dateTime('M d, Y H:i')
                    ->sortable()
                    ->toggleable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make()
                    ->using(function (PaymentType $record, array $data): Model {
                        $record->rename($data['name']);

                        return $record;
                    }),

                Tables\Actions\DeleteAction::make()
                    ->before(function (PaymentType $record, Tables\Actions\DeleteAction $action) {
                        $count = $record->paymentsCount();

                        if ($count > 0) {
                            Notification::make()
                                ->title('Cannot Delete')
                                ->danger()
                                ->body("\"{$record->name}\" is used in {$count} payment(s). Rename it instead, or change those payments first.")
                                ->send();

                            $action->cancel();
                        }
                    }),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManagePaymentTypes::route('/'),
        ];
    }
}
