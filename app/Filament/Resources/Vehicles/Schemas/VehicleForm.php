<?php

namespace App\Filament\Resources\Vehicles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([

                /* =====================
                 | DATA UTAMA KENDARAAN
                 ===================== */
                Select::make('vehicle_type_id')
                    ->label('Jenis Kendaraan')
                    ->relationship('vehicleType', 'name')
                    ->required(),

                TextInput::make('license_plate')
                    ->label('Nomor Polisi')
                    ->required()
                    ->unique(ignoreRecord: true),

                TextInput::make('model')
                    ->label('Tipe / Model')
                    ->required(),

                DatePicker::make('purchase_year')
                    ->label('Tahun Pembelian')
                    ->required(),

                TextInput::make('color')
                    ->label('Warna'),

                /* =====================
                 | MERK & ORGANISASI
                 ===================== */
                Select::make('brand_id')
                    ->label('Merk')
                    ->relationship('brand', 'name')
                    ->required(),

                Select::make('directorate_id')
                    ->label('Biro')
                    ->relationship('directorate', 'name')
                    ->required(),

                Select::make('position_id')
                    ->label('Pemakai / Jabatan')
                    ->relationship('position', 'name')
                    ->required(),

                TextInput::make('user_phone')
                    ->label('No. HP Pemakai')
                    ->tel(),

                /* =====================
                 | IDENTITAS KENDARAAN
                 ===================== */
                TextInput::make('engine_number')
                    ->label('Nomor Mesin')
                    ->required(),

                TextInput::make('chassis_number')
                    ->label('Nomor Rangka')
                    ->required(),

                /* =====================
                 | DATA BAST
                 ===================== */
                TextInput::make('bast_number')
                    ->label('Nomor BAST'),

                DatePicker::make('bast_date')
                    ->label('Tanggal BAST'),

                /* =====================
                 | STNK & NILAI
                 ===================== */
                DatePicker::make('stnk_due_date')
                    ->label('Tanggal STNK')
                    ->required(),

                DatePicker::make('stnk_5_year_due_date')
                    ->label('Tanggal STNK 5 Tahunan'),

                TextInput::make('stnk_cost')
                    ->label('Biaya STNK')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                TextInput::make('stnk_5_year_cost')
                    ->label('Biaya STNK 5 Tahun')
                    ->numeric()
                    ->prefix('Rp')
                     ->required(),

                TextInput::make('acquisition_value')
                    ->label('Nilai Perolehan')
                    ->numeric()
                    ->prefix('Rp')
                    ->required(),

                /* =====================
                 | KONDISI KENDARAAN
                 ===================== */
                TextInput::make('body_condition')
                    ->label('Kondisi Body'),

                TextInput::make('engine_condition')
                    ->label('Kondisi Mesin'),

                /* =====================
                 | CATATAN
                 ===================== */
                Textarea::make('memo')
                    ->label('Memo')
                    ->columnSpanFull(),

                /* =====================
                 | STATUS
                 ===================== */
                Toggle::make('has_kir')
                    ->label('KIR'),

                Toggle::make('has_insurance')
                    ->label('Asuransi'),

                Toggle::make('is_locked')
                    ->label('Terkunci'),

                Toggle::make('is_active')
                    ->label('Aktif')
                    ->default(true),
            ]);
    }
}
