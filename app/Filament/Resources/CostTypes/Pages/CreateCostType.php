<?php

namespace App\Filament\Resources\CostTypes\Pages;

use App\Filament\Resources\CostTypes\CostTypeResource;
use Filament\Resources\Pages\CreateRecord;

class CreateCostType extends CreateRecord
{
    protected static string $resource = CostTypeResource::class;

    protected static ?string $title = 'Tambah Jenis Biaya';
}

