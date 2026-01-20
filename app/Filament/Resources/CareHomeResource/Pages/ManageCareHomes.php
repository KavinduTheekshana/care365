<?php

namespace App\Filament\Resources\CareHomeResource\Pages;

use App\Filament\Resources\CareHomeResource;
use Filament\Resources\Pages\ManageRecords;

class ManageCareHomes extends ManageRecords
{
    protected static string $resource = CareHomeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            \Filament\Actions\CreateAction::make(),
        ];
    }
}