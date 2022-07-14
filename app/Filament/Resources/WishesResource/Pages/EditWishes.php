<?php

namespace App\Filament\Resources\WishesResource\Pages;

use App\Filament\Resources\WishesResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWishes extends EditRecord
{
    protected static string $resource = WishesResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
