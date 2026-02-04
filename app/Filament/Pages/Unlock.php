<?php

namespace App\Filament\Pages;

use App\Models\Vehicle;
use Filament\Pages\Page;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;

class Unlock extends Page implements Forms\Contracts\HasForms
{
    use Forms\Concerns\InteractsWithForms;

    protected static ?string $navigationLabel = 'Kunci';
    protected static ?string $title = 'Buka Kunci Data Kendaraan';
    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-lock-open';
    protected static ?int $navigationSort = 2;

    protected string $view = 'filament.pages.unlock';

    public ?int $vehicle_id = null;

    protected function getFormSchema(): array
    {
        return [
            Select::make('vehicle_id')
                ->label('No Polisi')
                ->options(
                    Vehicle::where('is_locked', true)
                        ->pluck('license_plate', 'id')
                )
                ->searchable()
                ->required(),
        ];
    }

    public function unlock()
    {
        $vehicle = Vehicle::find($this->vehicle_id);

        if (! $vehicle) {
            return;
        }

        $vehicle->update([
            'is_locked' => false,
        ]);

        Notification::make()
            ->title('Berhasil')
            ->body('Data kendaraan berhasil dibuka')
            ->success()
            ->send();

        $this->reset('vehicle_id');
    }
}
