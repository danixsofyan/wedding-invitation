<?php

namespace App\Filament\Resources\BrideResource\Pages;

use App\Filament\Resources\BrideResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditBride extends EditRecord
{
    protected static string $resource = BrideResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
