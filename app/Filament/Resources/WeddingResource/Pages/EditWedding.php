<?php

namespace App\Filament\Resources\WeddingResource\Pages;

use App\Filament\Resources\WeddingResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWedding extends EditRecord
{
    protected static string $resource = WeddingResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
