<?php

namespace App\Filament\Resources\Deletions\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class DeletionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('vehicle_id')
                    ->label('Kendaraan')
                    ->numeric()
                    ->sortable(),
                TextColumn::make('deleted_at_date')
                    ->label('Tgl Penghapusan')
                    ->dateTime()
                    ->sortable(),
                TextColumn::make('sk_number')
                    ->label('No SK')
                    ->searchable(),
              TextColumn::make('memo')
                    ->columnSpanFull(),
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
