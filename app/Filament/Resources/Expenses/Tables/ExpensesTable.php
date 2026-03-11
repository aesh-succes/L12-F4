<?php

namespace App\Filament\Resources\Expenses\Tables;

use Filament\Actions\BulkActionGroup;
use Filament\Actions\DeleteBulkAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class ExpensesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('transaction_date')
                    ->label('Tgl')
                    ->date()
                    ->sortable(),
                TextColumn::make('vehicle_name')
                    ->label('Kendaraan')
                    ->searchable(),
                TextColumn::make('directorate')
                    ->label('Direktorat')
                    ->searchable(),
                TextColumn::make('expense_type')
                    ->label('Biaya')
                    ->searchable(),
                TextColumn::make('amount')
                    ->label('Jumlah')
                    ->numeric()
                    ->sortable(),
                // Penambahan kolom Memo
                TextColumn::make('memo')
                    ->label('Memo')
                    ->searchable()
                    ->limit(50), // Membatasi teks agar tidak terlalu panjang di tabel
              
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