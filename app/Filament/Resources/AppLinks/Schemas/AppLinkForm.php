<?php

namespace App\Filament\Resources\AppLinks\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class AppLinkForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('app_store_url')
                    ->url(),
                TextInput::make('play_store_url')
                    ->url(),
            ]);
    }
}
