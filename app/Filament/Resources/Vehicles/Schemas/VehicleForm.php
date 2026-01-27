<?php

namespace App\Filament\Resources\Vehicles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('vehicle_type_id')
                    ->label('Jenis Kendaraan')
                    ->required()
                    ->numeric(),
                TextInput::make('brand_id')
                    ->label('Merk')
                    ->required()
                    ->numeric(),
                TextInput::make('directorate_id')
                    ->label('Direktorat')
                    ->required()
                    ->numeric(),
                TextInput::make('position_id')
                    ->label('Jabatan')
                    ->required()
                    ->numeric(),
                TextInput::make('license_plate')
                    ->label('Nomor Polisi')
                    ->required(),
                TextInput::make('chassis_number')
                    ->label('Nomor Rangka')
                    ->required(),
                TextInput::make('engine_number')
                    ->label('Nomor Mesin')
                    ->required(),
                TextInput::make('model')
                    ->required(),
                TextInput::make('color')
                    ->label('Warna')
                    ->required(),
                TextInput::make('purchase_year')
                    ->label('Tahun Pembelian')
                    ->required(),
                TextInput::make('acquisition_value')
                    ->label('Nilai Perolehan')
                    ->required()
                    ->numeric(),
                DatePicker::make('stnk_due_date')
                    ->label('Tanggal Jatuh Tempo STNK')
                    ->required(),
                TextInput::make('stnk_cost')
                    ->label('Biaya Perpanjangan STNK')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
                Toggle::make('is_deleted')
                    ->label('Dihapus')
                    ->default(false),
            ]);
    }
}
