<?php

namespace App\Filament\Resources\Maintenances\RelationManagers;

use Filament\Resources\RelationManagers\RelationManager;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;

class DetailsRelationManager extends RelationManager
{
    protected static string $relationship = 'details';

    public function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('sparePart.name')
                    ->label('Suku Cadang')
                    ->searchable(),

                TextColumn::make('price')
                    ->label('Harga')
                    ->money('IDR'),

                TextColumn::make('quantity')
                    ->label('Jumlah'),

                TextColumn::make('total')
                    ->label('Total')
                    ->money('IDR')
                    ->state(fn ($record) =>
                        $record->quantity * $record->price
                    ),

            ])
            ->headerActions([])
            ->recordActions([])
            ->toolbarActions([]);
    }
}
