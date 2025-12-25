<?php

namespace App\Filament\Resources\ClientOutingResource\Pages;

use App\Filament\Resources\ClientOutingResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListClientOutings extends ListRecords
{
    protected static string $resource = ClientOutingResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
