<?php

namespace App\Filament\Resources\Direktorats\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class DirektoratForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('direktorat')
                    ->required(),
                TextInput::make('no_hp_1'),
                TextInput::make('no_hp_2'),
                TextInput::make('kota_kab_id')
                    ->required()
                    ->numeric(),
            ]);
    }
}
