<?php

namespace App\Filament\Resources\Posts\Schemas;

use App\Models\Post;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Schema;

class PostForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->model(Post::class)
            ->components([
                FileUpload::make('image')
                    ->label('Image')
                    ->image()
                    ->required(),

                Grid::make(2)->components([
                    TextInput::make('title')
                        ->label('Title')
                        ->required(),

                    Select::make('category_id')
                        ->relationship('category', 'name')
                        ->required(),
                ]),

                RichEditor::make('content')
                    ->label('Content')
                    ->required(),
            ]);
    }
}
