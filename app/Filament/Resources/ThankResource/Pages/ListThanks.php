<?php

namespace App\Filament\Resources\ThankResource\Pages;

use App\Filament\Resources\ThankResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListThanks extends ListRecords
{
    protected static string $resource = ThankResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
