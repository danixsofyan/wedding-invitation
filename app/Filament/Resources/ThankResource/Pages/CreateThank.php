<?php

namespace App\Filament\Resources\ThankResource\Pages;

use App\Filament\Resources\ThankResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateThank extends CreateRecord
{
    protected static string $resource = ThankResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
