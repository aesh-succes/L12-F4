<?php

namespace App\Filament\Resources\KotaKabs\Pages;

use App\Filament\Resources\KotaKabs\KotaKabResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditKotaKab extends EditRecord
{
    protected static string $resource = KotaKabResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
