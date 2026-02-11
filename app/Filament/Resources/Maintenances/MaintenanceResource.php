<?php

namespace App\Filament\Resources\Maintenances;

use App\Models\Maintenance;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use BackedEnum;


class MaintenanceResource extends Resource
{
    protected static ?string $model = Maintenance::class;

    protected static ?string $navigationLabel = 'Lihat Data';
    protected static ?string $pluralLabel = 'Lihat Data';
    protected static ?string $label = 'Lihat Data';
    protected static ?string $breadcrumb = 'Lihat Data';


    protected static string|\UnitEnum|null $navigationGroup = 'Service';

protected static string | \BackedEnum | null $navigationIcon = 'heroicon-o-wrench-screwdriver';

    public static function table(Table $table): Table
{
    return $table
        ->query(
            Maintenance::query()
                ->with(['vehicle', 'details.sparePart'])
        )

        ->columns([

           TextColumn::make('vehicle.license_plate')
    ->label('No Polisi')
    ->searchable(),

            TextColumn::make('service_date')
                ->label('Tgl Service')
                ->date()
                ->sortable(),

            TextColumn::make('mileage')
                ->label('KM Service'),

            TextColumn::make('cost')
                ->label('Biaya')
                ->money('IDR')
                ->summarize(
                    Tables\Columns\Summarizers\Sum::make()
                        ->label('Total Biaya')
                ),

            TextColumn::make('next_service')
                ->label('Tgl Next Service')
                ->state(fn ($record) =>
                    Carbon::parse($record->service_date)->addDays(30)
                )
                ->date(),
        ])

        ->filters([

            Filter::make('service_date_range')
                ->schema([
                    DatePicker::make('from')->label('Dari Tanggal'),
                    DatePicker::make('until')->label('Sampai Tanggal'),
                ])
                ->query(function (Builder $query, array $data) {
                    return $query
                        ->when(
                            $data['from'] ?? null,
                            fn ($q) => $q->whereDate('service_date', '>=', $data['from'])
                        )
                        ->when(
                            $data['until'] ?? null,
                            fn ($q) => $q->whereDate('service_date', '<=', $data['until'])
                        );
                }),

            Filter::make('vehicle_id')
                ->schema([
                    Select::make('vehicle_id')
                        ->label('No Polisi')
                        ->relationship('vehicle', 'no_polisi')
                        ->searchable(),
                ])
                ->query(function (Builder $query, array $data) {
                    return $query->when(
                        $data['vehicle_id'] ?? null,
                        fn ($q) => $q->where('vehicle_id', $data['vehicle_id'])
                    );
                }),

            Filter::make('service_date_exact')
                ->schema([
                    DatePicker::make('service_date')
                        ->label('Tgl Service'),
                ])
                ->query(function (Builder $query, array $data) {
                    return $query->when(
                        $data['service_date'] ?? null,
                        fn ($q) => $q->whereDate('service_date', $data['service_date'])
                    );
                }),

        ]);
}


    public static function getPages(): array
{
    return [
        'index' => Pages\ListMaintenances::route('/'),
        'view' => Pages\ViewMaintenance::route('/{record}'),
    ];
}
public static function getRelations(): array
{
    return [
        RelationManagers\DetailsRelationManager::class,
    ];
}


    public static function canCreate(): bool { return false; }
    public static function canEdit(Model $record): bool { return false; }
    public static function canDelete(Model $record): bool { return false; }
}
