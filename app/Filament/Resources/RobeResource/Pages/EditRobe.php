<?php

namespace App\Filament\Resources\RobeResource\Pages;

use App\Filament\Resources\RobeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRobe extends EditRecord
{
    protected static string $resource = RobeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
