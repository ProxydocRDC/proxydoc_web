<?php

namespace App\Filament\Resources\AppLinks;

use App\Filament\Resources\AppLinks\Pages\CreateAppLink;
use App\Filament\Resources\AppLinks\Pages\EditAppLink;
use App\Filament\Resources\AppLinks\Pages\ListAppLinks;
use App\Filament\Resources\AppLinks\Pages\ViewAppLink;
use App\Filament\Resources\AppLinks\Schemas\AppLinkForm;
use App\Filament\Resources\AppLinks\Schemas\AppLinkInfolist;
use App\Filament\Resources\AppLinks\Tables\AppLinksTable;
use App\Models\AppLink;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class AppLinkResource extends Resource
{
    protected static ?string $model = AppLink::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDevicePhoneMobile;

    public static function form(Schema $schema): Schema
    {
        return AppLinkForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return AppLinkInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return AppLinksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListAppLinks::route('/'),
            'create' => CreateAppLink::route('/create'),
            'view' => ViewAppLink::route('/{record}'),
            'edit' => EditAppLink::route('/{record}/edit'),
        ];
    }
}
