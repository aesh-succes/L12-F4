<?php

namespace App\Filament\Resources\Vehicles\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class VehiclesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->emptyStateHeading('Belum ada data kendaraan')
            ->columns([
                TextColumn::make('vehicle_type_id')
                    ->label('Jenis Kendaraan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('brand_id')
                    ->label('Merk')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('directorate_id')
                    ->label('Direktorat')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('position_id')
                    ->label('Jabatan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('license_plate')
                    ->label('Nomor Polisi')
                    ->searchable(),
                TextColumn::make('chassis_number')
                    ->label('Nomor Rangka')
                    ->searchable(),
                TextColumn::make('engine_number')
                    ->label('Nomor Mesin')
                    ->searchable(),
                TextColumn::make('model')
                    ->searchable(),
                TextColumn::make('color')
                    ->label('Warna')
                    ->searchable(),
                TextColumn::make('purchase_year')
                    ->label('Tahun Pembelian'),
                TextColumn::make('acquisition_value')
                    ->label('Nilai Perolehan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('stnk_due_date')
                    ->label('Tanggal Jatuh Tempo STNK')
                    ->date()
                    ->sortable(),
                TextColumn::make('stnk_cost')
                    ->label('Biaya Perpanjangan STNK')
                    ->money()
                    ->sortable(),
                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),
                IconColumn::make('is_deleted')
                    ->label('Dihapus')
                    ->boolean(),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make(),
            ])
            ->toolbarActions([
                BulkActionGroup::make([
                    DeleteBulkAction::make(),
                ]),
            ]);
    }
}
