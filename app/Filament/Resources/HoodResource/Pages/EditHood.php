<?php

namespace App\Filament\Resources\HoodResource\Pages;

use App\Filament\Resources\HoodResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditHood extends EditRecord
{
    protected static string $resource = HoodResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
