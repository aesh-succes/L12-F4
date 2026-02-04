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
                TextColumn::make('license_plate')
                    ->label('No Polisi')
                    ->searchable(),

                TextColumn::make('vehicleType.name')
                    ->label('Jenis Kendaraan')
                    ->sortable(),

                TextColumn::make('brand.name')
                    ->label('Merk')
                    ->sortable(),

                TextColumn::make('model')
                    ->label('Type')
                    ->searchable(),

                TextColumn::make('purchase_year')
                    ->label('Tahun'),

                TextColumn::make('directorate.name')
                    ->label('Biro')
                    ->sortable(),

                TextColumn::make('position.name')
                    ->label('Biro Pemakai')
                    ->sortable(),

                TextColumn::make('stnk_due_date')
                    ->label('STNK')
                    ->date(),

                IconColumn::make('has_kir')
                    ->label('KIR')
                    ->boolean(),

                IconColumn::make('has_insurance')
                    ->label('Asuransi')
                    ->boolean(),

                IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

                TextColumn::make('created_at')
                    ->label('Dibuat')
                    ->dateTime()
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
