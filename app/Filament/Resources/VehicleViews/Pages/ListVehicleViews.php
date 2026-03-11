<?php

namespace App\Filament\Resources\VehicleViews\Pages;

use App\Filament\Resources\VehicleViews\VehicleViewResource;
use Filament\Resources\Pages\ListRecords;

class ListVehicleViews extends ListRecords
{
    protected static string $resource = VehicleViewResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }
}
