<?php

namespace App\Filament\Resources\Directorates\Pages;

use App\Filament\Resources\Directorates\DirectorateResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDirectorates extends ListRecords
{
    protected static string $resource = DirectorateResource::class;

    protected static ?string $title = 'Daftar Direktorat';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make()
                ->label('Tambah Direktorat'),
        ];
    }
}
