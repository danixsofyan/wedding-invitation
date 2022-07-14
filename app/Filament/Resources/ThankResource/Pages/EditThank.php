<?php

namespace App\Filament\Resources\ThankResource\Pages;

use App\Filament\Resources\ThankResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\EditRecord;

class EditThank extends EditRecord
{
    protected static string $resource = ThankResource::class;

    protected function getActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
