<?php

namespace App\Filament\Resources\WishesResource\Pages;

use App\Filament\Resources\WishesResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateWishes extends CreateRecord
{
    protected static string $resource = WishesResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}
