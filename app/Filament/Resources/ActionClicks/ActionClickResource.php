<?php

namespace App\Filament\Resources\ActionClicks;

use App\Filament\Resources\ActionClicks\Pages\CreateActionClick;
use App\Filament\Resources\ActionClicks\Pages\EditActionClick;
use App\Filament\Resources\ActionClicks\Pages\ListActionClicks;
use App\Filament\Resources\ActionClicks\Pages\ViewActionClick;
use App\Filament\Resources\ActionClicks\Schemas\ActionClickForm;
use App\Filament\Resources\ActionClicks\Schemas\ActionClickInfolist;
use App\Filament\Resources\ActionClicks\Tables\ActionClicksTable;
use App\Models\ActionClick;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ActionClickResource extends Resource
{
    protected static ?string $model = ActionClick::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCursorArrowRays;

    protected static ?string $recordTitleAttribute = 'action_name';

    public static function getNavigationBadge(): ?string
    {
        return (string) ActionClick::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'warning';
    }

    public static function form(Schema $schema): Schema
    {
        return ActionClickForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return ActionClickInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ActionClicksTable::configure($table);
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
            'index' => ListActionClicks::route('/'),
            'create' => CreateActionClick::route('/create'),
            'view' => ViewActionClick::route('/{record}'),
            'edit' => EditActionClick::route('/{record}/edit'),
        ];
    }
}
