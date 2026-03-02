<?php

namespace App\Filament\Pages;

use App\Models\Expense;
use Filament\Pages\Page;
use Filament\Tables\Table;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Concerns\InteractsWithTable;
use App\Filament\Resources\Expenses\Tables\ExpensesTable;

class ViewExpense extends Page implements HasTable
{
    use InteractsWithTable;

        protected static string|\UnitEnum|null $navigationGroup = 'Biaya';

    protected static string|\BackedEnum|null $navigationIcon = 'heroicon-o-document-text';
    protected static ?string $navigationLabel = 'Lihat Data'; 
    protected static ?string $title = 'BIAYA - LIHAT DATA'; 
    
    // HAPUS KATA 'static' DI SINI
    protected string $view = 'filament.pages.view-expense'; 

    public function table(Table $table): Table
    {
        // Tetap menggunakan configure sesuai struktur yang kamu mau
        return ExpensesTable::configure($table)
            ->query(Expense::query())
            ->headerActions([]); 
    }
}