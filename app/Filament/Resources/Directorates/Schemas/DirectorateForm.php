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
                    ->label('KotaKab')
                    ->numeric(),
                TextInput::make('phone_number_1')
                    ->label('Nomor Telepon 1')
                    ->numeric(),
                TextInput::make('phone_number_2')
                    ->label('Nomor Telepon 2')
                    ->numeric(),
            ]);
    }
}
