<?php

namespace App\Filament\Widgets;

use Filament\Widgets\Widget;
use Illuminate\Support\Facades\Auth;
use App\Models\Client;
use App\Models\ClientMeal;
use App\Models\ClientDailyChecklist;
use App\Models\CareerAttendance;

class CareerDashboardWidget extends Widget
{
    protected static string $view = 'filament.widgets.career-dashboard-widget';

    protected int | string | array $columnSpan = 'full';

    public static function canView(): bool
    {
        return Auth::user()->hasRole('career');
    }

    protected function getViewData(): array
    {
        $user = Auth::user();
        $branchId = $user->branch_id;

        // Get analytics data
        $totalClients = Client::where('branch_id', $branchId)->count();

        $mealsRecordedToday = ClientMeal::whereHas('client', function ($query) use ($branchId) {
            $query->where('branch_id', $branchId);
        })
        ->where('recorded_by', $user->id)
        ->whereDate('meal_date', today())
        ->count();

        $checklistsCompletedToday = ClientDailyChecklist::whereHas('client', function ($query) use ($branchId) {
            $query->where('branch_id', $branchId);
        })
        ->where('completed_by', $user->id)
        ->whereDate('date', today())
        ->count();

        $myAttendanceThisMonth = CareerAttendance::where('user_id', $user->id)
            ->whereMonth('date', now()->month)
            ->whereYear('date', now()->year)
            ->count();

        return [
            'userName' => $user->name,
            'branchName' => $user->branch?->name ?? 'No Branch Assigned',
            'role' => 'Carer',
            'totalClients' => $totalClients,
            'mealsRecordedToday' => $mealsRecordedToday,
            'checklistsCompletedToday' => $checklistsCompletedToday,
            'myAttendanceThisMonth' => $myAttendanceThisMonth,
        ];
    }
}
