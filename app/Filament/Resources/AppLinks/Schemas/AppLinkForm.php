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
                    ->label('URL App Store (site web)')
                    ->url(),
                TextInput::make('play_store_url')
                    ->label('URL Play Store (site web)')
                    ->url(),
                TextInput::make('qr_app_store_url')
                    ->label('URL App Store (QR code / campagne)')
                    ->url(),
                TextInput::make('qr_play_store_url')
                    ->label('URL Play Store (QR code / campagne)')
                    ->url(),
            ]);
    }
}
