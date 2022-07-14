<?php

namespace App\Filament\Resources\DetailResource\Pages;

use App\Filament\Resources\DetailResource;
use Filament\Pages\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateDetail extends CreateRecord
{
    protected static string $resource = DetailResource::class;
}
