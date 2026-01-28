<?php

namespace App\Filament\Resources\SukuCadangs\Pages;

use App\Filament\Resources\SukuCadangs\SukuCadangResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditSukuCadang extends EditRecord
{
    protected static string $resource = SukuCadangResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
