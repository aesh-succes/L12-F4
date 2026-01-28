<?php

namespace App\Filament\Resources\Admins\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;

class AdminForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('username')
                    ->required(),
                TextInput::make('name')
                    ->required(),
                TextInput::make('password')
                    ->password()
                    ->required(),
                DateTimePicker::make('last_login'),
                Toggle::make('active')
                    ->required(),
                Toggle::make('admin_web')
                    ->required(),
FileUpload::make('file_ttd')
    ->label('Tanda Tangan')
    ->image()
    ->imagePreviewHeight('150')
    ->directory('ttd-admin')
    ->disk('public')
    ->visibility('public')
    ->nullable(),

            ]);
    }
}
