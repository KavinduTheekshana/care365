<?php

namespace App\Filament\Resources\WhoweareResource\Pages;

use App\Filament\Resources\WhoweareResource;
use Filament\Resources\Pages\ManageRecords;

class ManageWhoweares extends ManageRecords
{
    protected static string $resource = WhoweareResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}