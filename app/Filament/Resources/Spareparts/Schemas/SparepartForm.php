<?php

namespace App\Filament\Resources\Spareparts\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SparepartForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Suku Cadang')
                    ->required(),
                TextInput::make('price')
                    ->label('Harga')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
            ]);
    }
}
