<?php

namespace App\Filament\Resources\MasterBiayas\Pages;

use App\Filament\Resources\MasterBiayas\MasterBiayaResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMasterBiaya extends EditRecord
{
    protected static string $resource = MasterBiayaResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
