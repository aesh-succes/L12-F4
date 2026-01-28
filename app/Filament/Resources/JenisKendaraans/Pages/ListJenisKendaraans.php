<?php

namespace App\Filament\Resources\JenisKendaraans\Pages;

use App\Filament\Resources\JenisKendaraans\JenisKendaraanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListJenisKendaraans extends ListRecords
{
    protected static string $resource = JenisKendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
