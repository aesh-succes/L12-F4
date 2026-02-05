<?php

namespace App\Filament\Resources\Deletions\Pages;

use App\Filament\Resources\Deletions\DeletionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDeletion extends EditRecord
{
    protected static string $resource = DeletionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
