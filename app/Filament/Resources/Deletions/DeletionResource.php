<?php

namespace App\Filament\Resources\Deletions;

use App\Filament\Resources\Deletions\Pages\CreateDeletion;
use App\Filament\Resources\Deletions\Pages\EditDeletion;
use App\Filament\Resources\Deletions\Pages\ListDeletions;
use App\Filament\Resources\Deletions\Schemas\DeletionForm;
use App\Filament\Resources\Deletions\Tables\DeletionsTable;
use App\Models\Deletion;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class DeletionResource extends Resource
{
    protected static ?string $model = Deletion::class;
    protected static ?string $navigationLabel = 'Penghapusan';
    protected static ?string $pluralLabel = 'Penghapusan';
    protected static ?string $label = 'Penghapusan';
    protected static ?string $breadcrumb = 'Penghapusan';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedTrash

;
    protected static string|\UnitEnum|null $navigationGroup = 'Kendaraan';

    protected static ?string $recordTitleAttribute = 'no';

    public static function form(Schema $schema): Schema
    {
        return DeletionForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DeletionsTable::configure($table);
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
            'index' => ListDeletions::route('/'),
            'create' => CreateDeletion::route('/create'),
            'edit' => EditDeletion::route('/{record}/edit'),
        ];
    }
}
