<?php

namespace App\Filament\Pages;

use Filament\Pages\Auth\PasswordReset\RequestPasswordReset as BaseRequestPasswordReset;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Password;

class RequestPasswordReset extends BaseRequestPasswordReset
{
    protected function sendResetLink(array $data): void
    {
        Log::info('=== PASSWORD RESET REQUESTED ===');
        Log::info('Email: ' . $data['email']);

        $user = \App\Models\User::where('email', $data['email'])->first();

        if ($user) {
            Log::info('User found: ' . $user->name);
            $token = Password::broker()->createToken($user);
            Log::info('Token created: ' . $token);
            $user->sendPasswordResetNotification($token);
            Log::info('Notification sent!');
        } else {
            Log::info('User NOT found!');
        }

        $this->form->fill();
        $this->getSuccessNotification()?->send();

        Log::info('=== DONE ===');
    }
}