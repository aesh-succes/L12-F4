<?php

namespace App\Filament\Resources\MerkKendaraans\Pages;

use App\Filament\Resources\MerkKendaraans\MerkKendaraanResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMerkKendaraans extends ListRecords
{
    protected static string $resource = MerkKendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
