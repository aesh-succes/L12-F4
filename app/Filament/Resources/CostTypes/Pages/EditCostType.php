<?php

namespace App\Filament\Resources\CostTypes\Pages;

use App\Filament\Resources\CostTypes\CostTypeResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditCostType extends EditRecord
{
    protected static string $resource = CostTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
