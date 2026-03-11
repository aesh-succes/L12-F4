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
    ->formatStateUsing(fn ($state, $record) =>
        $record->vehicle?->license_plate ?? '-'
    )
    ->description(fn ($record) =>
        $record->vehicle?->vehicleType?->name
    )
    ->searchable()
    ->sortable(),


                TextColumn::make('deleted_at_date')
                    ->label('Tgl Penghapusan')
                    ->date()
                    ->sortable(),

                TextColumn::make('sk_number')
                    ->label('No SK')
                    ->searchable(),
                TextColumn::make('memo')
                    ->label('Memo')
                    ->wrap(),
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
