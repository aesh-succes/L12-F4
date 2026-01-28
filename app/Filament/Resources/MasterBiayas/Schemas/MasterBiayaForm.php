<?php

namespace App\Filament\Resources\MasterBiayas\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class MasterBiayaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('biaya')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
