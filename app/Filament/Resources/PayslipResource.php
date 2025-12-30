<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PayslipResource\Pages;
use App\Filament\Resources\PayslipResource\RelationManagers;
use App\Models\Payslip;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PayslipResource extends Resource
{
    protected static ?string $model = Payslip::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('career_id')
                    ->relationship('career', 'id')
                    ->required(),
                Forms\Components\TextInput::make('payslip_number')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('month')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('year')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('payment_date')
                    ->required(),
                Forms\Components\TextInput::make('basic_salary')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('allowances')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('overtime')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('bonus')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('gross_salary')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('epf_employee')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('tax')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('other_deductions')
                    ->required()
                    ->numeric()
                    ->default(0.00),
                Forms\Components\TextInput::make('total_deductions')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('net_salary')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('status')
                    ->required(),
                Forms\Components\DateTimePicker::make('sent_at'),
                Forms\Components\TextInput::make('generated_by')
                    ->numeric(),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('career.id')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('payslip_number')
                    ->searchable(),
                Tables\Columns\TextColumn::make('month')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('year')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('payment_date')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('basic_salary')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('allowances')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('overtime')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('bonus')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gross_salary')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('epf_employee')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tax')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('other_deductions')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('total_deductions')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('net_salary')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('status'),
                Tables\Columns\TextColumn::make('sent_at')
                    ->dateTime()
                    ->sortable(),
                Tables\Columns\TextColumn::make('generated_by')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayslips::route('/'),
            'create' => Pages\CreatePayslip::route('/create'),
            'edit' => Pages\EditPayslip::route('/{record}/edit'),
        ];
    }
}
