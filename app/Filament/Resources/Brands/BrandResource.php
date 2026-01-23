<?php

namespace App\Filament\Resources\Brands;

use App\Filament\Resources\Brands\BrandResource\Pages;
use App\Models\Brand;
use Filament\Resources\Resource;

class BrandResource extends Resource
{
    protected static ?string $model = Brand::class;

    protected static ?string $navigationLabel = 'Brands';

    public static function getNavigationGroup(): ?string
    {
        return 'Master Data';
    }

    public static function getPages(): array
    {
        return [
            'index'  => Pages\ListBrands::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'edit'   => Pages\EditBrand::route('/{record}/edit'),
        ];
    }
}
