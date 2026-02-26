<?php

namespace App\Filament\Resources\VehicleViews\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Filters\SelectFilter;

class VehicleViewsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->striped()
            ->columns([

                Tables\Columns\TextColumn::make('vehicleType.name')
                    ->label('Jenis')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('license_plate')
                    ->label('No Polisi')
                    ->searchable(),

                Tables\Columns\TextColumn::make('model')
                    ->label('Tipe'),

 Tables\Columns\TextColumn::make('stnk_due_date')
                    ->label('Tgl STNK')
                    ->date(),


                Tables\Columns\TextColumn::make('purchase_year')
                    ->label('Tahun Beli'),

                Tables\Columns\TextColumn::make('engine_number')
                    ->label('No Mesin')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('chassis_number')
                    ->label('No Rangka')
                    ->toggleable(),

Tables\Columns\TextColumn::make('directorate.name')
    ->label('Biro')
    ->searchable(),

Tables\Columns\TextColumn::make('position.name')
    ->label('Biro Pemakai'),



Tables\Columns\TextColumn::make('user_phone')
    ->label('No HP'),

                Tables\Columns\TextColumn::make('brand.name')
                    ->label('Merk'),

                Tables\Columns\TextColumn::make('color')
                    ->label('Warna'),

                Tables\Columns\TextColumn::make('acquisition_value')
                    ->label('Nilai Perolehan')
                    ->money('IDR'),

                Tables\Columns\TextColumn::make('bast_number')
                    ->label('No BAST')
                    ->toggleable(),

                Tables\Columns\TextColumn::make('bast_date')
                    ->label('Tgl BAST')
                    ->date(),

                    Tables\Columns\TextColumn::make('engine_condition')
                    ->label('Kondisi Mesin')
                    ->badge()
                    ->color(fn ($state) => $state === 'Baik' ? 'success' : 'danger'),

                Tables\Columns\TextColumn::make('body_condition')
                    ->label('Kondisi Body')
                    ->badge()
                    ->color(fn ($state) => $state === 'Baik' ? 'success' : 'danger'),

                Tables\Columns\TextColumn::make('stnk_cost')
                    ->label('Biaya STNK')
                    ->money('IDR'),

                Tables\Columns\TextColumn::make('stnk_5_year_cost')
                    ->label('Biaya STNK 5 Tahun')
                    ->money('IDR'),

                     Tables\Columns\TextColumn::make('memo')
                    ->label('Memo')
                    ->limit(20)
                    ->toggleable(),

                Tables\Columns\IconColumn::make('has_kir')
                    ->label('KIR')
                    ->boolean(),

                Tables\Columns\IconColumn::make('has_insurance')
                    ->label('Asuransi')
                    ->boolean(),

                Tables\Columns\IconColumn::make('is_locked')
                    ->label('Lock')
                    ->boolean(),

                Tables\Columns\IconColumn::make('is_active')
                    ->label('Active')
                    ->boolean(),

               
            ])
            ->bulkActions([])

             ->filters([               
                // Filter No Polisi (Pilih salah satu opsi)
                SelectFilter::make('license_plate')
                    ->label('No Polisi')
                    ->searchable()
                    ->options(fn () => \App\Models\Vehicle::pluck('license_plate', 'license_plate')->toArray()),
            ])
            // Mengatur agar filter muncul di pop-up kanan atas (icon corong)
            ->filtersFormColumns(1);
    }
}