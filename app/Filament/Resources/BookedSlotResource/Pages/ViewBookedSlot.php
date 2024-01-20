<?php

namespace App\Filament\Resources\BookedSlotResource\Pages;

use App\Filament\Resources\BookedSlotResource;
use Filament\Actions;
use Filament\Resources\Pages\ViewRecord;

class ViewBookedSlot extends ViewRecord
{
    protected static string $resource = BookedSlotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\EditAction::make(),
        ];
    }
}
