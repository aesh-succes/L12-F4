<?php

namespace App\Filament\Resources\Directorates\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DirectoratesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->emptyStateHeading('Belum ada data direktorat')
            ->columns([
                TextColumn::make('name')
                    ->label('Direktorat')
                    ->searchable(),
                TextColumn::make('city_id')
                    ->label('KotaKab')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('phone_number_1')
                    ->label('Nomor Telepon 1')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('phone_number_2')
                    ->label('Nomor Telepon 2')
                    ->numeric()
                    ->sortable(),
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
