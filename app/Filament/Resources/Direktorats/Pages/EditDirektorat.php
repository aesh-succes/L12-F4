<?php

namespace App\Filament\Resources\Direktorats\Pages;

use App\Filament\Resources\Direktorats\DirektoratResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditDirektorat extends EditRecord
{
    protected static string $resource = DirektoratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
