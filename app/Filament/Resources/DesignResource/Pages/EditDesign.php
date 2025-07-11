<?php

namespace App\Filament\Resources\DesignResource\Pages;

use App\Filament\Resources\DesignResource;
use Filament\Actions;
use Filament\Actions\Action;
use Filament\Resources\Pages\EditRecord;

class EditDesign extends EditRecord
{
    protected static string $resource = DesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Action::make('print_invoice')
                ->label('طباعة الفاتورة')
                ->url(fn() => route('filament.admin.designs.print-invoice', ['record' => $this->record->id]))
                ->openUrlInNewTab()
                ->icon('heroicon-o-printer'),
        ];
    }
}
