<?php

namespace App\Filament\Resources\Directorates\Pages;

use App\Filament\Resources\Directorates\DirectorateResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDirectorate extends CreateRecord
{
    protected static string $resource = DirectorateResource::class;

    protected static ?string $title = 'Tambah Direktorat';
}
