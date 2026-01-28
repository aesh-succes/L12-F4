<?php

namespace App\Filament\Resources\MasterBiayas\Pages;

use App\Filament\Resources\MasterBiayas\MasterBiayaResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListMasterBiayas extends ListRecords
{
    protected static string $resource = MasterBiayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
