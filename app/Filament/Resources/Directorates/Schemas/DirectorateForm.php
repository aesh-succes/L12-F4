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
                    ->required(),
                TextInput::make('city_id')
                    ->numeric(),
                    TextInput::make('phone_number_1')
                    ->numeric(),
                    TextInput::make('phone_number_2')
                    ->numeric(),
            ]);
    }
}
