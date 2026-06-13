<?php

namespace App\Filament\Resources\AppLinks\Schemas;

use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class AppLinkInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('app_store_url')
                    ->label('URL App Store (site web)')
                    ->placeholder('-'),
                TextEntry::make('play_store_url')
                    ->label('URL Play Store (site web)')
                    ->placeholder('-'),
                TextEntry::make('qr_app_store_url')
                    ->label('URL App Store (QR code / campagne)')
                    ->placeholder('-'),
                TextEntry::make('qr_play_store_url')
                    ->label('URL Play Store (QR code / campagne)')
                    ->placeholder('-'),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
