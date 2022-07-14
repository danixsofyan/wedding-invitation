<?php

namespace App\Filament\Resources\DetailResource\Pages;

use App\Filament\Resources\DetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditDetail extends EditRecord
{
    protected static string $resource = DetailResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
