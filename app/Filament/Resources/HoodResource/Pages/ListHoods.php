<?php

namespace App\Filament\Resources\HoodResource\Pages;

use App\Filament\Resources\HoodResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListHoods extends ListRecords
{
    protected static string $resource = HoodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
