<?php

namespace App\Filament\Resources\Deletions\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class DeletionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('vehicle_id')
                    ->label('Kendaraan')
                    ->required()
                    ->numeric(),
                DateTimePicker::make('deleted_at_date')
                    ->label('Tgl Penghapusan')
                    ->required(),
                TextInput::make('sk_number')
                    ->label('No SK')
                    ->required(),
                Textarea::make('memo')
                    ->columnSpanFull(),
                TextInput::make('input_by')
                    ->label('Input Oleh')
                    ->required(),
                DateTimePicker::make('input_date')
                    ->label('Tgl Input')
                    ->required(),
            ]);
    }
}

