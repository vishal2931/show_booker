<?php

namespace App\Filament\Resources\BookedSlotResource\Pages;

use App\Filament\Resources\BookedSlotResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBookedSlot extends EditRecord
{
    protected static string $resource = BookedSlotResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\ViewAction::make(),
            Actions\DeleteAction::make(),
        ];
    }
}
