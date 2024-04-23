<?php

namespace App\Filament\Resources\BrideResource\Pages;

use App\Filament\Resources\BrideResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateBride extends CreateRecord
{
    protected static string $resource = BrideResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
