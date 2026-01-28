<?php

namespace App\Filament\Resources\SukuCadangs;

use App\Filament\Resources\SukuCadangs\Pages\CreateSukuCadang;
use App\Filament\Resources\SukuCadangs\Pages\EditSukuCadang;
use App\Filament\Resources\SukuCadangs\Pages\ListSukuCadangs;
use App\Filament\Resources\SukuCadangs\Schemas\SukuCadangForm;
use App\Filament\Resources\SukuCadangs\Tables\SukuCadangsTable;
use App\Models\SukuCadang;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class SukuCadangResource extends Resource
{
    protected static ?string $model = SukuCadang::class;


protected static string|\UnitEnum|null $navigationGroup = 'Master Data';


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedWrenchScrewdriver;

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return SukuCadangForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return SukuCadangsTable::configure($table);
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
            'index' => ListSukuCadangs::route('/'),
            'create' => CreateSukuCadang::route('/create'),
            'edit' => EditSukuCadang::route('/{record}/edit'),
        ];
    }
}
