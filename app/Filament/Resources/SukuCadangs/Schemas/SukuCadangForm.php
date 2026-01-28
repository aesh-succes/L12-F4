<?php

namespace App\Filament\Resources\SukuCadangs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class SukuCadangForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('nama')
                    ->required()
                    ->maxLength(255),
                TextInput::make('harga')
                    ->required()
                    ->maxLength(100),
            ]);
    }
}
