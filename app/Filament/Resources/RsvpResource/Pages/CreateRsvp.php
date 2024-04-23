<?php

namespace App\Filament\Resources\RsvpResource\Pages;

use App\Filament\Resources\RsvpResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateRsvp extends CreateRecord
{
    protected static string $resource = RsvpResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
