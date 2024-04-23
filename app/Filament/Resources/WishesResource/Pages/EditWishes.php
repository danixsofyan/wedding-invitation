<?php

namespace App\Filament\Resources\WishesResource\Pages;

use App\Filament\Resources\WishesResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditWishes extends EditRecord
{
    protected static string $resource = WishesResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
