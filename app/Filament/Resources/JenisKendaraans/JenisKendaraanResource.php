<?php

namespace App\Filament\Resources\JenisKendaraans;

use App\Filament\Resources\JenisKendaraans\Pages\CreateJenisKendaraan;
use App\Filament\Resources\JenisKendaraans\Pages\EditJenisKendaraan;
use App\Filament\Resources\JenisKendaraans\Pages\ListJenisKendaraans;
use App\Filament\Resources\JenisKendaraans\Schemas\JenisKendaraanForm;
use App\Filament\Resources\JenisKendaraans\Tables\JenisKendaraansTable;
use App\Models\JenisKendaraan;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class JenisKendaraanResource extends Resource
{
    protected static ?string $model = JenisKendaraan::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Master Data';


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTag;

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return JenisKendaraanForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return JenisKendaraansTable::configure($table);
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
            'index' => ListJenisKendaraans::route('/'),
            'create' => CreateJenisKendaraan::route('/create'),
            'edit' => EditJenisKendaraan::route('/{record}/edit'),
        ];
    }
}
