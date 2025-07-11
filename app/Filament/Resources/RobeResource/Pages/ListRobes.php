<?php

namespace App\Filament\Resources\RobeResource\Pages;

use App\Filament\Resources\RobeResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListRobes extends ListRecords
{
    protected static string $resource = RobeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
