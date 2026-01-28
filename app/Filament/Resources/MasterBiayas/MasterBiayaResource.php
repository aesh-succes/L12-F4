<?php

namespace App\Filament\Resources\MasterBiayas;

use App\Filament\Resources\MasterBiayas\Pages\CreateMasterBiaya;
use App\Filament\Resources\MasterBiayas\Pages\EditMasterBiaya;
use App\Filament\Resources\MasterBiayas\Pages\ListMasterBiayas;
use App\Filament\Resources\MasterBiayas\Schemas\MasterBiayaForm;
use App\Filament\Resources\MasterBiayas\Tables\MasterBiayasTable;
use App\Models\MasterBiaya;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class MasterBiayaResource extends Resource
{
    protected static ?string $model = MasterBiaya::class;

    protected static string|\UnitEnum|null $navigationGroup = 'Master Data';


    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCreditCard;

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return MasterBiayaForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MasterBiayasTable::configure($table);
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
            'index' => ListMasterBiayas::route('/'),
            'create' => CreateMasterBiaya::route('/create'),
            'edit' => EditMasterBiaya::route('/{record}/edit'),
        ];
    }
}
