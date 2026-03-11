<?php

namespace App\Filament\Resources\Deletions\Pages;

use App\Filament\Resources\Deletions\DeletionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDeletions extends ListRecords
{
    protected static string $resource = DeletionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
