<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ClientResource\Pages;
use App\Filament\Resources\ClientResource\RelationManagers;
use App\Models\Client;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class ClientResource extends Resource
{
    protected static ?string $model = Client::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationGroup = 'Client Management';

    protected static ?string $navigationLabel = 'Clients';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\FileUpload::make('image')
                            ->label('Client Photo')
                            ->image()
                            ->imageEditor()
                            ->imageEditorAspectRatios([
                                '1:1',
                                '4:3',
                            ])
                            ->directory('clients')
                            ->visibility('public')
                            ->maxSize(5120)
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('reg_number')
                            ->label('Registration Number')
                            ->required()
                            ->unique(ignoreRecord: true)
                            ->maxLength(255),
                        Forms\Components\DatePicker::make('date')
                            ->label('Registration Date')
                            ->required()
                            ->default(now()),
                        Forms\Components\TextInput::make('name')
                            ->required()
                            ->maxLength(255),
                        Forms\Components\Select::make('gender')
                            ->options([
                                'male' => 'Male',
                                'female' => 'Female',
                                'other' => 'Other',
                            ])
                            ->required()
                            ->native(false),
                        Forms\Components\DatePicker::make('dob')
                            ->label('Date of Birth')
                            ->required()
                            ->maxDate(now())
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $set) {
                                if ($state) {
                                    $age = \Carbon\Carbon::parse($state)->age;
                                    $set('age', $age);
                                }
                            }),
                        Forms\Components\TextInput::make('age')
                            ->required()
                            ->numeric()
                            ->disabled()
                            ->dehydrated(),
                    ])
                    ->columns(2),

                Forms\Components\Section::make('Health Information')
                    ->schema([
                        Forms\Components\Textarea::make('co_morbidities_risk_factors')
                            ->label('Co-Morbidities & Risk Factors')
                            ->rows(4)
                            ->columnSpanFull(),
                        Forms\Components\Repeater::make('complaints')
                            ->label('Complaints')
                            ->schema([
                                Forms\Components\DatePicker::make('date')
                                    ->label('Date')
                                    ->required()
                                    ->default(now()),
                                Forms\Components\Textarea::make('complaint')
                                    ->label('Complaint Details')
                                    ->required()
                                    ->rows(3)
                                    ->columnSpanFull(),
                            ])
                            ->defaultItems(0)
                            ->addActionLabel('Add Complaint')
                            ->collapsible()
                            ->collapsed()
                            ->itemLabel(fn (array $state): ?string => $state['date'] ?? null)
                            ->columnSpanFull()
                            ->columns(2),
                    ]),

                Forms\Components\Section::make('Physical Measurements')
                    ->schema([
                        Forms\Components\TextInput::make('height_cm')
                            ->label('Height (CM)')
                            ->numeric()
                            ->step(0.01)
                            ->suffix('cm')
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                $weight = $get('weight_kg');
                                if ($state && $weight) {
                                    $heightInMeters = $state / 100;
                                    $bmi = $weight / ($heightInMeters * $heightInMeters);
                                    $set('bmi', round($bmi, 2));
                                }
                            }),
                        Forms\Components\TextInput::make('weight_kg')
                            ->label('Weight (KG)')
                            ->numeric()
                            ->step(0.01)
                            ->suffix('kg')
                            ->reactive()
                            ->afterStateUpdated(function ($state, callable $get, callable $set) {
                                $height = $get('height_cm');
                                if ($state && $height) {
                                    $heightInMeters = $height / 100;
                                    $bmi = $state / ($heightInMeters * $heightInMeters);
                                    $set('bmi', round($bmi, 2));
                                }
                            }),
                        Forms\Components\TextInput::make('bmi')
                            ->label('BMI')
                            ->numeric()
                            ->disabled()
                            ->dehydrated()
                            ->helperText('Automatically calculated from height and weight'),
                        Forms\Components\TextInput::make('waist_circumference')
                            ->label('Waist Circumference (CM)')
                            ->numeric()
                            ->step(0.01)
                            ->suffix('cm'),
                        Forms\Components\TextInput::make('hip_circumference')
                            ->label('Hip Circumference (CM)')
                            ->numeric()
                            ->step(0.01)
                            ->suffix('cm'),
                    ])
                    ->columns(3),

                Forms\Components\Section::make('Care Assignment')
                    ->schema([
                        Forms\Components\Select::make('officer_in_charge_id')
                            ->label('Officer in Charge (Carer)')
                            ->options(function () {
                                return User::whereHas('roles', function ($query) {
                                    $query->where('name', 'career');
                                })->pluck('name', 'id');
                            })
                            ->searchable()
                            ->preload()
                            ->helperText('Select a carer to be responsible for this client'),
                        Forms\Components\Select::make('guardians')
                            ->label('Guardians')
                            ->relationship('guardians', 'name')
                            ->multiple()
                            ->searchable()
                            ->preload()
                            ->helperText('Select one or more guardians for this client'),
                    ])
                    ->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->label('Photo')
                    ->circular()
                    ->defaultImageUrl(url('/images/default-avatar.png'))
                    ->toggleable(),
                Tables\Columns\TextColumn::make('reg_number')
                    ->label('Reg. Number')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('name')
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('gender')
                    ->badge()
                    ->colors([
                        'info' => 'male',
                        'danger' => 'female',
                        'gray' => 'other',
                    ])
                    ->formatStateUsing(fn (string $state): string => ucfirst($state)),
                Tables\Columns\TextColumn::make('age')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('dob')
                    ->label('Date of Birth')
                    ->date()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('bmi')
                    ->label('BMI')
                    ->numeric()
                    ->sortable()
                    ->toggleable(),
                Tables\Columns\TextColumn::make('officerInCharge.name')
                    ->label('Officer in Charge')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('guardians.name')
                    ->label('Guardians')
                    ->badge()
                    ->separator(',')
                    ->toggleable(),
                Tables\Columns\TextColumn::make('date')
                    ->label('Registration Date')
                    ->date()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('gender')
                    ->options([
                        'male' => 'Male',
                        'female' => 'Female',
                        'other' => 'Other',
                    ]),
                Tables\Filters\SelectFilter::make('officer_in_charge')
                    ->relationship('officerInCharge', 'name')
                    ->label('Officer in Charge')
                    ->preload(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->defaultSort('created_at', 'desc');
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
            'index' => Pages\ListClients::route('/'),
            'create' => Pages\CreateClient::route('/create'),
            'edit' => Pages\EditClient::route('/{record}/edit'),
        ];
    }

    public static function canViewAny(): bool
    {
        return auth()->user()->hasAnyRole(['admin', 'manager', 'career']);
    }
}
