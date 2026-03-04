<?php

namespace App\Filament\Pages;

use App\Models\Vehicle;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use Filament\Pages\Page;
use BackedEnum;

use Filament\Forms\Contracts\HasForms;
use Filament\Forms\Concerns\InteractsWithForms;

use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;

use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TextColumn;

class ControlCard extends Page implements HasForms, HasTable
{
    use InteractsWithForms;
    use InteractsWithTable;

    protected static ?string $title = 'Kartu Kendali';
    protected static string|\UnitEnum|null $navigationGroup = 'Service';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';
    protected string $view = 'filament.pages.control-card';

    public ?int $year = null;
    public ?int $vehicle_id = null;

    public function mount(): void
    {
        $this->form->fill();
    }

    /* ======================
     | FORM FILTER
     |====================== */
     public function form(Schema $schema): Schema
{
    return $schema->components([
                Select::make('vehicle_id')
                    ->label('Kendaraan')
                    ->options(Vehicle::pluck('license_plate', 'id'))
                    ->searchable(),

                Select::make('year')
                    ->label('Tahun')
                    ->options(
                        collect(range(date('Y'), 2020))
                            ->mapWithKeys(fn ($year) => [$year => $year])
                            ->toArray()
                    ),
            ]);
    }

    /* ======================
     | TABLE
     |====================== */
    public function table(Table $table): Table
    {
        return $table
            ->query(
                Vehicle::query()
                    ->when($this->vehicle_id, fn ($q) =>
                        $q->where('id', $this->vehicle_id)
                    )
            )
            ->columns([
                TextColumn::make('license_plate')
                    ->label('No Polisi')
                    ->searchable(),

                TextColumn::make('model')
                    ->label('Model'),

                TextColumn::make('purchase_year')
                    ->label('Tahun Beli'),
            ]);
    }
}