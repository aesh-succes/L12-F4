<?php

namespace App\Filament\Resources\VehicleTypes\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VehicleTypeForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Jenis Kendaraan')
                    ->required()
                    ->maxLength(255),

                Toggle::make('is_active')
                    ->label('Aktif')
                    ->required(),
            ]);
    }
}
