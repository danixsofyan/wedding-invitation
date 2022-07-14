<?php

namespace App\Filament\Resources\ThankResource\Pages;

use App\Filament\Resources\ThankResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateThank extends CreateRecord
{
    protected static string $resource = ThankResource::class;
}
