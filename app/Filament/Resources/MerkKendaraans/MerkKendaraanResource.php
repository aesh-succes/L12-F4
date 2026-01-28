<?php

namespace App\Filament\Resources\MerkKendaraans;

use App\Filament\Resources\MerkKendaraans\Pages\CreateMerkKendaraan;
use App\Filament\Resources\MerkKendaraans\Pages\EditMerkKendaraan;
use App\Filament\Resources\MerkKendaraans\Pages\ListMerkKendaraans;
use App\Filament\Resources\MerkKendaraans\Schemas\MerkKendaraanForm;
use App\Filament\Resources\MerkKendaraans\Tables\MerkKendaraansTable;
use App\Models\MerkKendaraan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MerkKendaraanResource extends Resource
{
    protected static ?string $model = MerkKendaraan::class;

protected static string|\UnitEnum|null $navigationGroup = 'Master Data';


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTruck;

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return MerkKendaraanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MerkKendaraansTable::configure($table);
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
            'index' => ListMerkKendaraans::route('/'),
            'create' => CreateMerkKendaraan::route('/create'),
            'edit' => EditMerkKendaraan::route('/{record}/edit'),
        ];
    }
}
