<?php

namespace App\Filament\Resources\Posts\Tables;

use Filament\Tables;
use Filament\Tables\Table;
use Filament\Actions\BulkAction;

class PostsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('image')
                    ->circular(),

                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->sortable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Category'),
            ])
            ->recordUrl(fn ($record) => route(
                'filament.admin.resources.posts.edit',
                $record
            ))
            ->bulkActions([
                BulkAction::make('delete')
                    ->label('Delete')
                    ->requiresConfirmation()
                    ->action(fn ($records) => $records->each->delete()),
            ]);
    }
}
