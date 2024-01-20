<?php

namespace App\Filament\Resources\BookedSlotResource\Pages;

use App\Filament\Resources\BookedSlotResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListBookedSlots extends ListRecords
{
    protected static string $resource = BookedSlotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
