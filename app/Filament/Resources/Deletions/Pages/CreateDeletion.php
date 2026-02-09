<?php

namespace App\Filament\Resources\Deletions\Pages;

use App\Filament\Resources\Deletions\DeletionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDeletion extends CreateRecord
{
    protected static string $resource = DeletionResource::class;

    protected function afterCreate(): void
    {
        $vehicle = $this->record->vehicle;

        if ($vehicle) {
            $vehicle->update([
                'is_active' => false,
            ]);
        }
    }
}
