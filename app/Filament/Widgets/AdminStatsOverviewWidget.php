<?php

namespace App\Filament\Widgets;

use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use App\Models\Client;
use App\Models\User;
use App\Models\Branch;
use App\Models\CareerAttendance;
use App\Models\ClientMeal;
use App\Models\ClientDailyChecklist;
use App\Models\Medication;
use App\Models\Payment;

class AdminStatsOverviewWidget extends BaseWidget
{
    protected static ?int $sort = 1;

    public static function canView(): bool
    {
        return auth()->user()->hasAnyRole(['admin', 'manager']);
    }

    protected function getStats(): array
    {
        // Overall Statistics
        $totalClients = Client::count();
        $totalBranches = Branch::where('is_active', true)->count();
        $totalCarers = User::whereHas('roles', function ($query) {
            $query->where('name', 'career');
        })->count();

        // Today's Activity
        $mealsRecordedToday = ClientMeal::whereDate('meal_date', today())->count();
        $checklistsCompletedToday = ClientDailyChecklist::whereDate('date', today())->count();
        $attendanceMarkedToday = CareerAttendance::whereDate('date', today())->count();

        // This Month Statistics
        $newClientsThisMonth = Client::whereMonth('created_at', now()->month)
            ->whereYear('created_at', now()->year)
            ->count();
        $totalPaymentsThisMonth = Payment::whereMonth('payment_date', now()->month)
            ->whereYear('payment_date', now()->year)
            ->sum('amount');
        $activeMedications = Medication::where('is_active', true)->count();

        // Previous month comparisons
        $clientsLastMonth = Client::whereMonth('created_at', now()->subMonth()->month)
            ->whereYear('created_at', now()->subMonth()->year)
            ->count();
        $paymentsLastMonth = Payment::whereMonth('payment_date', now()->subMonth()->month)
            ->whereYear('payment_date', now()->subMonth()->year)
            ->sum('amount');

        return [
            Stat::make('Total Clients', $totalClients)
                ->description('Registered in system')
                ->descriptionIcon('heroicon-m-user-group')
                ->color('success')
                ->chart([7, 12, 15, 18, 22, 25, $totalClients]),

            Stat::make('Active Branches', $totalBranches)
                ->description('Operating locations')
                ->descriptionIcon('heroicon-m-building-office-2')
                ->color('info')
                ->chart([3, 4, 5, 5, 6, 6, $totalBranches]),

            Stat::make('Total Carers', $totalCarers)
                ->description('Active staff members')
                ->descriptionIcon('heroicon-m-users')
                ->color('warning')
                ->chart([10, 12, 15, 18, 20, 22, $totalCarers]),

            Stat::make('New Clients This Month', $newClientsThisMonth)
                ->description($clientsLastMonth > 0 ? ($newClientsThisMonth > $clientsLastMonth ? 'Increase from last month' : 'Decrease from last month') : 'First month')
                ->descriptionIcon($newClientsThisMonth > $clientsLastMonth ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($newClientsThisMonth > $clientsLastMonth ? 'success' : 'danger')
                ->chart([2, 3, 4, 5, 6, 7, $newClientsThisMonth]),

            Stat::make('Meals Recorded Today', $mealsRecordedToday)
                ->description('Meal entries logged')
                ->descriptionIcon('heroicon-m-shopping-cart')
                ->color('success')
                ->chart([10, 15, 20, 25, 30, 35, $mealsRecordedToday]),

            Stat::make('Checklists Completed Today', $checklistsCompletedToday)
                ->description('Daily checks done')
                ->descriptionIcon('heroicon-m-clipboard-document-check')
                ->color('info')
                ->chart([5, 10, 15, 20, 25, 30, $checklistsCompletedToday]),

            Stat::make('Attendance Marked Today', $attendanceMarkedToday)
                ->description('Staff check-ins')
                ->descriptionIcon('heroicon-m-clock')
                ->color('warning')
                ->chart([8, 12, 15, 18, 20, 22, $attendanceMarkedToday]),

            Stat::make('Total Payments This Month', '£' . number_format($totalPaymentsThisMonth, 2))
                ->description($paymentsLastMonth > 0 ? '£' . number_format($paymentsLastMonth, 2) . ' last month' : 'Revenue collected')
                ->descriptionIcon($totalPaymentsThisMonth > $paymentsLastMonth ? 'heroicon-m-arrow-trending-up' : 'heroicon-m-arrow-trending-down')
                ->color($totalPaymentsThisMonth > $paymentsLastMonth ? 'success' : 'danger')
                ->chart([1000, 2000, 3000, 4000, 5000, 6000, $totalPaymentsThisMonth]),

            Stat::make('Active Medications', $activeMedications)
                ->description('Currently prescribed')
                ->descriptionIcon('heroicon-m-beaker')
                ->color('danger')
                ->chart([20, 25, 30, 35, 40, 45, $activeMedications]),
        ];
    }
}
