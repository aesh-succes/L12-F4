<?php

namespace App\Filament\Resources\Expenses\Schemas;

use Filament\Schemas\Schema; 
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select; // Tambahkan import Select ini
use Filament\Forms\Components\Textarea;

class ExpenseForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                DatePicker::make('transaction_date')
                    ->label('Tgl')
                    ->required(),
                
                // Mengubah TextInput menjadi Select untuk Kendaraan
                Select::make('vehicle_name')
                    ->label('Kendaraan')
                    ->options([
                        'B 1234 ABC' => 'B 1234 ABC',
                        'D 1093 A' => 'D 1093 A',
                    ])
                    ->searchable() // Agar bisa diketik saat mencari
                    ->required(),

                // Mengubah TextInput menjadi Select untuk Biaya
                Select::make('expense_type')
                    ->label('Biaya')
                    ->options([
                        'Uji KIR' => 'Uji KIR',
                        'Perpanjang STNK' => 'Perpanjang STNK',
                        'Service Rutin' => 'Service Rutin',
                    ])
                    ->required(),

                TextInput::make('amount')
                    ->label('Jumlah')
                    ->required()
                    ->numeric(),

                Textarea::make('memo')
                    ->label('Memo')
                    ->columnSpanFull(),
            ]);
    }
}