<?php

namespace App\Filament\Resources\Vehicles\Pages;

use App\Filament\Resources\Vehicles\VehicleResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditVehicle extends EditRecord
{
    protected static string $resource = VehicleResource::class;

    protected static ?string $title = 'Ubah Kendaraan';

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make()
                ->label('Hapus Kendaraan'),
        ];
    }
}
