<?php

namespace App\Filament\Resources\JenisKendaraans\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class JenisKendaraanForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('jenis')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
