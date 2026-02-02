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
        // Share footer services with the correct footer view path
        View::composer(['frontend.components.footer', 'layouts.footer', 'partials.footer'], function ($view) {
            $footer_services = Service::where('is_public', true)
                ->select('title', 'title_slug')
                ->latest()
                ->take(5)
                ->get();
            
            $view->with('footer_services', $footer_services);
        });
    }
}