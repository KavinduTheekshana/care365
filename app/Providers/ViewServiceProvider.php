<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Service;
use Illuminate\Support\Facades\View;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
public function boot(): void
{
    // Share services only with footer views
    View::composer(
        ['frontend.components.footer', 'layouts.footer', 'partials.footer'], 
        function ($view) {
            // Get ALL public services once (most performant)
            $publicServices = Service::where('is_public', true)
                ->select('title', 'title_slug')
                ->get();                    // ← no ->latest() anymore

            // Shuffle once and take what we need
            $shuffled = $publicServices->shuffle();

            // Only share footer_services (no header_services)
            $view->with([
                'footer_services' => $shuffled->take(5),
            ]);
        }
    );
}
}