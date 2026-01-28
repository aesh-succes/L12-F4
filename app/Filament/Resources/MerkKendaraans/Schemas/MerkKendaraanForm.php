<?php

namespace App\Filament\Resources\MerkKendaraans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class MerkKendaraanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('merk')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
