<?php

namespace App\Filament\Resources\Vehicles\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Schema;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('vehicle_type_id')
                    ->label('Jenis Kendaraan')
                    ->relationship('vehicleType', 'name')
                    ->required(),

                Select::make('brand_id')
                    ->label('Merk')
                    ->relationship('brand', 'name')
                    ->required(),

                Select::make('directorate_id')
                    ->label('Direktorat')
                    ->relationship('directorate', 'name')
                    ->required(),

                Select::make('position_id')
                    ->label('Jabatan')
                    ->relationship('position', 'name')
                    ->required(),

                TextInput::make('license_plate')
                    ->label('Nomor Polisi')
                    ->required()
                    ->helperText('Masukkan nomor polisi kendaraan'),

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
                    ->required()
                    ->numeric(),

                TextInput::make('acquisition_value')
                    ->label('Nilai Perolehan (Rp)')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),

                DatePicker::make('stnk_due_date')
                    ->label('Tanggal Jatuh Tempo STNK')
                    ->required(),

                TextInput::make('stnk_cost')
                    ->label('Biaya Perpanjangan STNK (Rp)')
                    ->required()
                    ->numeric()
                    ->prefix('Rp'),

                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),

                Toggle::make('is_deleted')
                    ->label('Dihapus')
                    ->default(false),
            ]);
    }
}
