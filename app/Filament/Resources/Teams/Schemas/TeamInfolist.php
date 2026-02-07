<?php

namespace App\Filament\Resources\Teams\Schemas;

use Filament\Infolists\Components\IconEntry;
use Filament\Infolists\Components\ImageEntry;
use Filament\Infolists\Components\TextEntry;
use Filament\Schemas\Schema;

class TeamInfolist
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextEntry::make('name'),
                TextEntry::make('role')
                    ->placeholder('-'),
                TextEntry::make('bio')
                    ->placeholder('-')
                    ->columnSpanFull(),
                ImageEntry::make('image')
                    ->placeholder('-'),
                TextEntry::make('linkedin_url')
                    ->placeholder('-'),
                TextEntry::make('twitter_url')
                    ->placeholder('-'),
                TextEntry::make('facebook_url')
                    ->placeholder('-'),
                TextEntry::make('order')
                    ->numeric(),
                IconEntry::make('is_active')
                    ->boolean(),
                TextEntry::make('created_at')
                    ->dateTime()
                    ->placeholder('-'),
                TextEntry::make('updated_at')
                    ->dateTime()
                    ->placeholder('-'),
            ]);
    }
}
