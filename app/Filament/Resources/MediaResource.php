<?php

namespace App\Filament\Resources;

use Awcodes\Curator\Resources\MediaResource as BaseMediaResource;
use Filament\Tables;
use Filament\Tables\Table;

class MediaResource extends BaseMediaResource
{
    protected static ?string $navigationIcon = 'heroicon-o-photo';

    protected static ?string $navigationGroup = 'Media Management';

    protected static ?string $navigationLabel = 'Media Library';

    protected static ?int $navigationSort = 10;

    public static function table(Table $table): Table
    {
        return parent::table($table)
            ->contentGrid([
                'md' => 2,
                'lg' => 3,
                'xl' => 4,
            ])
            ->defaultPaginationPageOption(24)
            ->paginationPageOptions([12, 24, 48, 96]);
    }

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
