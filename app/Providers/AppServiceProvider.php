<?php

namespace App\Providers;

use Illuminate\Auth\Notifications\ResetPassword;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Force mail to always send synchronously
        // This overrides QUEUE_CONNECTION=database for mail only
        config(['queue.default' => 'sync']);

        // Existing code below...
        Livewire::component(
            'app.filament.resources.client-resource.pages.generate-invoice',
            \App\Filament\Resources\ClientResource\Pages\GenerateInvoice::class
        );

        ResetPassword::createUrlUsing(function ($user, string $token) {
            return url(route('filament.admin.auth.password-reset.reset', [
                'token' => $token,
                'email' => $user->getEmailForPasswordReset(),
            ], false));
        });
    }
}