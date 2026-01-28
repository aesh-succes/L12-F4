<?php

namespace App\Filament\Resources\JenisKendaraans\Pages;

use App\Filament\Resources\JenisKendaraans\JenisKendaraanResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditJenisKendaraan extends EditRecord
{
    protected static string $resource = JenisKendaraanResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
