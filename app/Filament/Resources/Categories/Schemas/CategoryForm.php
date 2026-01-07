<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Models\Category;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->model(Category::class)
            ->components([
                TextInput::make('name')
                    ->label('Category Name')
                    ->required(),

                Textarea::make('description')
                    ->label('Description')
                    ->rows(5),
            ]);
    }
}
