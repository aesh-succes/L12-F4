<?php

namespace App\Filament\Resources\KotaKabs\Pages;

use App\Filament\Resources\KotaKabs\KotaKabResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListKotaKabs extends ListRecords
{
    protected static string $resource = KotaKabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
