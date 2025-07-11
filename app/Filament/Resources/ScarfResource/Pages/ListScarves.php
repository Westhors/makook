<?php

namespace App\Filament\Resources\ScarfResource\Pages;

use App\Filament\Resources\ScarfResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListScarves extends ListRecords
{
    protected static string $resource = ScarfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
