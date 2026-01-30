<?php

namespace App\Filament\Resources\Users\Schemas;

use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\FileUpload;

class UserForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nama')
                    ->required(),
                TextInput::make('email')
                    ->email()
                    ->required(),
                DateTimePicker::make('email_verified_at'),
                TextInput::make('password')
                    ->password()
                    ->required(),
                Toggle::make('is_active')
                ->label('Aktif')
                ->default(true),
             FileUpload::make('signature_file')
                ->label('File TTD')
                ->directory('signatures')
                ->acceptedFileTypes(['image/png', 'image/jpeg'])
                ->image()
                ->maxSize(1024) // 1MB
                ->columnSpanFull(),
            ]);
    }
}
