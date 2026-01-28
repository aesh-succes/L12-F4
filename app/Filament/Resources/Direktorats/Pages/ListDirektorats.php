<?php

namespace App\Filament\Resources\Direktorats\Pages;

use App\Filament\Resources\Direktorats\DirektoratResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDirektorats extends ListRecords
{
    protected static string $resource = DirektoratResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
