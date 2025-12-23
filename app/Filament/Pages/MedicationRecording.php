<?php

namespace App\Filament\Pages;

use App\Models\Client;
use App\Models\Medication;
use App\Models\MedicationRecord;
use App\Models\User;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Form;
use Filament\Pages\Page;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Filament\Notifications\Notification;
use Filament\Actions\Action as PageAction;
use Filament\Forms\Components\Grid;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\MedicationChartExport;

class MedicationRecording extends Page implements HasForms, HasTable
{
    use InteractsWithForms, InteractsWithTable;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    protected static string $view = 'filament.pages.medication-recording';

    protected static ?string $navigationGroup = 'Client Management';

    protected static ?int $navigationSort = 3;

    protected static ?string $title = 'Medication Recording';

    public ?string $selectedDate = null;
    public ?int $selectedClient = null;
    public ?string $selectedTime = null;

    public function mount(): void
    {
        $this->selectedDate = today()->toDateString();
        $this->selectedTime = 'all';
    }

    protected function getHeaderActions(): array
    {
        return [
            PageAction::make('export')
                ->label('Export Monthly Chart')
                ->icon('heroicon-o-arrow-down-tray')
                ->color('success')
                ->form([
                    Select::make('client_id')
                        ->label('Client')
                        ->options(Client::pluck('name', 'id'))
                        ->required()
                        ->searchable()
                        ->helperText('Select the client for export'),
                    Grid::make(2)
                        ->schema([
                            Select::make('month')
                                ->label('Month')
                                ->options([
                                    1 => 'January',
                                    2 => 'February',
                                    3 => 'March',
                                    4 => 'April',
                                    5 => 'May',
                                    6 => 'June',
                                    7 => 'July',
                                    8 => 'August',
                                    9 => 'September',
                                    10 => 'October',
                                    11 => 'November',
                                    12 => 'December',
                                ])
                                ->default(now()->month)
                                ->required()
                                ->native(false),
                            Select::make('year')
                                ->label('Year')
                                ->options(function () {
                                    $years = [];
                                    $currentYear = now()->year;
                                    for ($i = $currentYear - 2; $i <= $currentYear + 1; $i++) {
                                        $years[$i] = $i;
                                    }
                                    return $years;
                                })
                                ->default(now()->year)
                                ->required()
                                ->native(false),
                        ]),
                ])
                ->action(function (array $data) {
                    $client = Client::find($data['client_id']);
                    $monthName = date('F', mktime(0, 0, 0, $data['month'], 1));
                    $fileName = "medication_chart_{$client->name}_{$monthName}_{$data['year']}.xlsx";

                    Notification::make()
                        ->title('Export started')
                        ->success()
                        ->send();

                    return Excel::download(
                        new MedicationChartExport($data['client_id'], $data['month'], $data['year']),
                        $fileName
                    );
                }),
        ];
    }

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                DatePicker::make('selectedDate')
                    ->label('Date')
                    ->default(today())
                    ->native(false)
                    ->live()
                    ->afterStateUpdated(fn () => $this->resetTable()),
                Select::make('selectedClient')
                    ->label('Client')
                    ->options(Client::pluck('name', 'id'))
                    ->searchable()
                    ->placeholder('All Clients')
                    ->live()
                    ->afterStateUpdated(fn () => $this->resetTable()),
                Select::make('selectedTime')
                    ->label('Time of Day')
                    ->options([
                        'all' => 'All Times',
                        'morning' => 'Morning',
                        'afternoon' => 'Afternoon',
                        'evening' => 'Evening',
                    ])
                    ->default('all')
                    ->native(false)
                    ->live()
                    ->afterStateUpdated(fn () => $this->resetTable()),
            ])
            ->columns(3);
    }

    public function table(Table $table): Table
    {
        return $table
            ->query($this->getTableQuery())
            ->columns([
                TextColumn::make('client.name')
                    ->label('Client')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('medication.drug_name')
                    ->label('Medication')
                    ->searchable(),
                TextColumn::make('medication.dosage')
                    ->label('Dosage'),
                TextColumn::make('time_of_day')
                    ->label('Time')
                    ->badge()
                    ->formatStateUsing(fn ($state) => ucfirst($state))
                    ->color(fn ($state) => match($state) {
                        'morning' => 'warning',
                        'afternoon' => 'info',
                        'evening' => 'success',
                    }),
                IconColumn::make('given')
                    ->label('Given')
                    ->boolean()
                    ->sortable(),
                TextColumn::make('givenByUser.name')
                    ->label('Given By')
                    ->placeholder('Not given'),
                TextColumn::make('given_at')
                    ->label('Time Given')
                    ->time()
                    ->placeholder('-'),
            ])
            ->actions([
                Action::make('mark_given')
                    ->label('Mark as Given')
                    ->icon('heroicon-o-check')
                    ->color('success')
                    ->visible(fn (MedicationRecord $record) => !$record->given)
                    ->form([
                        Select::make('given_by')
                            ->label('Given By (Career)')
                            ->options(function () {
                                return User::whereHas('roles', function ($query) {
                                    $query->where('name', 'career');
                                })->pluck('name', 'id');
                            })
                            ->required()
                            ->searchable()
                            ->preload()
                            ->helperText('Select the career who gave this medication'),
                        TimePicker::make('given_at')
                            ->label('Time Given')
                            ->required()
                            ->default(now())
                            ->seconds(false)
                            ->helperText('Enter the time when medication was given'),
                    ])
                    ->action(function (MedicationRecord $record, array $data) {
                        $record->update([
                            'given' => true,
                            'given_by' => $data['given_by'],
                            'given_at' => $data['given_at'],
                        ]);

                        Notification::make()
                            ->title('Medication marked as given')
                            ->success()
                            ->send();
                    }),
                Action::make('undo')
                    ->label('Undo')
                    ->icon('heroicon-o-arrow-uturn-left')
                    ->color('warning')
                    ->visible(fn (MedicationRecord $record) => $record->given)
                    ->requiresConfirmation()
                    ->action(function (MedicationRecord $record) {
                        $record->update([
                            'given' => false,
                            'given_by' => null,
                            'given_at' => null,
                        ]);

                        Notification::make()
                            ->title('Medication status reset')
                            ->success()
                            ->send();
                    }),
            ])
            ->bulkActions([
                // No bulk actions for safety
            ])
            ->defaultSort('client.name');
    }

    protected function getTableQuery(): Builder
    {
        $date = $this->selectedDate ?? today()->toDateString();

        // Get all active medications
        $query = Medication::where('is_active', true)
            ->where('start_date', '<=', $date)
            ->where(function ($q) use ($date) {
                $q->whereNull('end_date')
                    ->orWhere('end_date', '>=', $date);
            });

        // Filter by client if selected
        if ($this->selectedClient) {
            $query->where('client_id', $this->selectedClient);
        }

        // Create medication records for the selected date
        $medications = $query->get();

        foreach ($medications as $medication) {
            $times = $this->getTimesForFrequency($medication->frequency);

            foreach ($times as $time) {
                MedicationRecord::firstOrCreate([
                    'medication_id' => $medication->id,
                    'client_id' => $medication->client_id,
                    'date' => $date,
                    'time_of_day' => $time,
                ]);
            }
        }

        // Return medication records query
        $recordsQuery = MedicationRecord::with(['client', 'medication', 'givenByUser'])
            ->where('date', $date);

        // Filter by time if not 'all'
        if ($this->selectedTime && $this->selectedTime !== 'all') {
            $recordsQuery->where('time_of_day', $this->selectedTime);
        }

        // Filter by client if selected
        if ($this->selectedClient) {
            $recordsQuery->where('client_id', $this->selectedClient);
        }

        return $recordsQuery;
    }

    protected function getTimesForFrequency(string $frequency): array
    {
        return match($frequency) {
            'morning' => ['morning'],
            'afternoon' => ['afternoon'],
            'evening' => ['evening'],
            'morning_afternoon' => ['morning', 'afternoon'],
            'morning_evening' => ['morning', 'evening'],
            'afternoon_evening' => ['afternoon', 'evening'],
            'all_three' => ['morning', 'afternoon', 'evening'],
            default => [],
        };
    }

    public static function canAccess(): bool
    {
        return auth()->user()->hasAnyRole(['admin', 'manager']);
    }
}
