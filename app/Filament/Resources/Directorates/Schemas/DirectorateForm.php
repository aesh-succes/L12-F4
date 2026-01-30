<?php

namespace App\Filament\Resources\Directorates\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DirectorateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Direktorat')
                    ->required(),

                TextInput::make('city_id')
                    ->label('Kota/Kab')
                    ->nullable(),

                TextInput::make('phone_number_1')
                    ->label('Nomor Telepon 1')
                    ->maxLength(20)
                    ->nullable()
                    ->helperText('Boleh angka, huruf, atau keterangan (contoh: WA Admin)'),

                TextInput::make('phone_number_2')
                    ->label('Nomor Telepon 2')
                    ->maxLength(20)
                    ->nullable(),
            ]);
    }
}
