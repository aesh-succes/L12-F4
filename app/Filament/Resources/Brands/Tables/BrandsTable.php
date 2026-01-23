<?php

namespace App\Filament\Resources\BrandResource\Tables;

use Filament\Tables;
use Filament\Schemas\Schema;

class BrandTable
{
    public static function schema(): array
    {
        return [
            Tables\Columns\TextColumn::make('name')
                ->searchable()
                ->sortable(),
        ];
    }
}
