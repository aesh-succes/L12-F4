<?php

namespace App\Filament\Resources\BrandResource\Schemas;

use Filament\Forms;
use Filament\Schemas\Schema;

class BrandForm
{
    public static function schema(): array
    {
        return [
            Forms\Components\TextInput::make('name')
                ->label('Brand Name')
                ->required()
                ->maxLength(50),
        ];
    }
}
