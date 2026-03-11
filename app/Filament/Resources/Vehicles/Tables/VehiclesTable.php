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
            ->columns([

                /* IDENTITAS UTAMA */
                TextColumn::make('license_plate')
                    ->label('No Polisi')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('vehicleType.name')
                    ->label('Jenis Kendaraan')
                    ->sortable(),

                TextColumn::make('brand.name')
                    ->label('Merk')
                    ->sortable(),

                TextColumn::make('model')
                    ->label('Model')
                    ->searchable(),

                TextColumn::make('purchase_year')
                    ->label('Tahun')
                    ->sortable(),

                /* ORGANISASI */
                TextColumn::make('directorate.name')
                    ->label('Biro')
                    ->sortable(),

                TextColumn::make('position.name')
                    ->label('Pemakai')
                    ->sortable(),

                /* STNK */
                TextColumn::make('stnk_due_date')
                    ->label('STNK')
                    ->date()
                    ->sortable(),

                /* STATUS */
                IconColumn::make('has_kir')
                    ->label('KIR')
                    ->boolean(),

                IconColumn::make('has_insurance')
                    ->label('Asuransi')
                    ->boolean(),

                IconColumn::make('is_locked')
                    ->label('Terkunci')
                    ->boolean(),

                IconColumn::make('is_active')
                    ->label('Aktif')
                    ->boolean(),

                /* AUDIT */
                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
                    ->toggleable(isToggledHiddenByDefault: true),
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
