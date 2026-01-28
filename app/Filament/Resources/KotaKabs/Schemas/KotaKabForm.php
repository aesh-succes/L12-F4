<?php

namespace App\Filament\Resources\KotaKabs\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;

class KotaKabForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('kota_kab')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
