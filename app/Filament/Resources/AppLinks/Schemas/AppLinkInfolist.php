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
                    ->placeholder('-'),
                TextEntry::make('play_store_url')
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
