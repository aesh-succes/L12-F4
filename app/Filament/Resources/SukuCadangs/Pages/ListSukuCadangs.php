<?php

namespace App\Filament\Resources\SukuCadangs\Pages;

use App\Filament\Resources\SukuCadangs\SukuCadangResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSukuCadangs extends ListRecords
{
    protected static string $resource = SukuCadangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
