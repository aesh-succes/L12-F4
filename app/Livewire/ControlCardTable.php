<?php

namespace App\Livewire;

use App\Models\Service;
use Filament\Tables;
use Filament\Widgets\TableWidget;
use Illuminate\Database\Eloquent\Builder;

class ControlCardTable extends TableWidget
{
    protected static ?string $heading = 'Kartu Kendali'; // ✅ INI YANG BENAR

    public ?int $year = null;
    public ?int $vehicle_id = null;

    protected int|string|array $columnSpan = 'full';

    protected function getTableQuery(): Builder
    {
        return Service::query()
            ->with(['details.sparePart'])
            ->when($this->year, fn ($q) =>
                $q->whereYear('service_date', $this->year)
            )
            ->when($this->vehicle_id, fn ($q) =>
                $q->where('vehicle_id', $this->vehicle_id)
            );
    }

    protected function getTableColumns(): array
    {
        return [
            Tables\Columns\TextColumn::make('service_date')
                ->label('Tgl Service')
                ->date(),

            Tables\Columns\TextColumn::make('register_number')
                ->label('No Register'),

            Tables\Columns\TextColumn::make('km_service')
                ->label('KM Service'),

            Tables\Columns\TextColumn::make('details.sparePart.name')
                ->label('Spare Part')
                ->listWithLineBreaks(),

            Tables\Columns\TextColumn::make('total_cost')
                ->label('Total')
                ->money('IDR'),
        ];
    }
}