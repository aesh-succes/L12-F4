<?php

namespace App\Filament\Resources\Spareparts\Pages;

use App\Filament\Resources\Spareparts\SparepartResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListSpareparts extends ListRecords
{
    protected static string $resource = SparepartResource::class;

    protected static ?string $title = 'Daftar Suku Cadang';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Suku Cadang'),
        ];
    }
}
