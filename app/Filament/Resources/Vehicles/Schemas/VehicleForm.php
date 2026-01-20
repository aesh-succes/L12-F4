<?php

namespace App\Filament\Resources\Vehicles\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;

class VehicleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('vehicle_type_id')
                    ->required()
                    ->numeric(),
                TextInput::make('brand_id')
                    ->required()
                    ->numeric(),
                TextInput::make('directorate_id')
                    ->required()
                    ->numeric(),
                TextInput::make('position_id')
                    ->required()
                    ->numeric(),
                TextInput::make('license_plate')
                    ->required(),
                TextInput::make('chassis_number')
                    ->required(),
                TextInput::make('engine_number')
                    ->required(),
                TextInput::make('model')
                    ->required(),
                TextInput::make('color'),
                TextInput::make('purchase_year')
                    ->required(),
                TextInput::make('acquisition_value')
                    ->required()
                    ->numeric(),
                DatePicker::make('stnk_due_date')
                    ->required(),
                TextInput::make('stnk_cost')
                    ->required()
                    ->numeric()
                    ->prefix('$'),
                Toggle::make('is_active')
                    ->required(),
                Toggle::make('is_deleted')
                    ->required(),
            ]);
    }
}
