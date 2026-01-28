<?php

namespace App\Filament\Resources\KotaKabs;

use App\Filament\Resources\KotaKabs\Pages\CreateKotaKab;
use App\Filament\Resources\KotaKabs\Pages\EditKotaKab;
use App\Filament\Resources\KotaKabs\Pages\ListKotaKabs;
use App\Filament\Resources\KotaKabs\Schemas\KotaKabForm;
use App\Filament\Resources\KotaKabs\Tables\KotaKabsTable;
use App\Models\KotaKab;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class KotaKabResource extends Resource
{
    protected static ?string $model = KotaKab::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedMapPin;

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return KotaKabForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return KotaKabsTable::configure($table);
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
            'index' => ListKotaKabs::route('/'),
            'create' => CreateKotaKab::route('/create'),
            'edit' => EditKotaKab::route('/{record}/edit'),
        ];
    }
}
