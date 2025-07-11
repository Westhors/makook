<?php

namespace App\Filament\Resources\ScarfResource\Pages;

use App\Filament\Resources\ScarfResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditScarf extends EditRecord
{
    protected static string $resource = ScarfResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
