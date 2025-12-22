<?php

namespace App\Filament\Resources;

use Awcodes\Curator\Resources\MediaResource as BaseMediaResource;
use Filament\Tables;

class MediaResource extends BaseMediaResource
{
    public static function canViewAny(): bool
    {
        return auth()->user()->hasAnyRole(['admin', 'manager']);
    }

    public static function shouldRegisterNavigation(): bool
    {
        return auth()->user()->hasAnyRole(['admin', 'manager']);
    }

    public static function canCreate(): bool
    {
        return auth()->user()->hasAnyRole(['admin', 'manager']);
    }

    public static function canEdit($record): bool
    {
        return auth()->user()->hasAnyRole(['admin', 'manager']);
    }

    public static function canDelete($record): bool
    {
        return auth()->user()->hasAnyRole(['admin', 'manager']);
    }

    public static function canDeleteAny(): bool
    {
        return auth()->user()->hasAnyRole(['admin', 'manager']);
    }
}
