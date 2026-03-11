<?php

namespace App\Filament\Resources\VehicleViews;

use App\Filament\Resources\VehicleViews\Schemas\VehicleViewForm;
use App\Filament\Resources\VehicleViews\Tables\VehicleViewsTable;
use App\Models\Vehicle;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class VehicleViewResource extends Resource
{
    protected static ?string $model = Vehicle::class;
            protected static string|\UnitEnum|null $navigationGroup = 'Kendaraan';
    protected static ?string $label = 'Lihat Data';


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return VehicleViewForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return VehicleViewsTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

   public static function getPages(): array
{
    return [
        'index' => Pages\ListVehicleViews::route('/'),
        'view' => Pages\ViewVehicleView::route('/{record}'),
    ];
}
}
