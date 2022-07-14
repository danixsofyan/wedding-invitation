<?php

namespace App\Filament\Resources\RsvpResource\Pages;

use App\Filament\Resources\RsvpResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditRsvp extends EditRecord
{
    protected static string $resource = RsvpResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
