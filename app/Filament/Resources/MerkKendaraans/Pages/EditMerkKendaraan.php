<?php

namespace App\Filament\Resources\MerkKendaraans\Pages;

use App\Filament\Resources\MerkKendaraans\MerkKendaraanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMerkKendaraan extends EditRecord
{
    protected static string $resource = MerkKendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
