<?php

namespace App\Filament\Resources\Direktorats;

use App\Filament\Resources\Direktorats\Pages\CreateDirektorat;
use App\Filament\Resources\Direktorats\Pages\EditDirektorat;
use App\Filament\Resources\Direktorats\Pages\ListDirektorats;
use App\Filament\Resources\Direktorats\Schemas\DirektoratForm;
use App\Filament\Resources\Direktorats\Tables\DirektoratsTable;
use App\Models\Direktorat;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DirektoratResource extends Resource
{
    protected static ?string $model = Direktorat::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Master Data';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedBuildingOffice2;

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return DirektoratForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DirektoratsTable::configure($table);
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
            'index' => ListDirektorats::route('/'),
            'create' => CreateDirektorat::route('/create'),
            'edit' => EditDirektorat::route('/{record}/edit'),
        ];
    }
}
