<?php

namespace App\Filament\Resources\DetailResource\Pages;

use App\Filament\Resources\DetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\ListRecords;

class ListDetails extends ListRecords
{
    protected static string $resource = DetailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
