<?php

namespace App\Filament\Resources\PageVisits;

use App\Filament\Resources\PageVisits\Pages\CreatePageVisit;
use App\Filament\Resources\PageVisits\Pages\EditPageVisit;
use App\Filament\Resources\PageVisits\Pages\ListPageVisits;
use App\Filament\Resources\PageVisits\Pages\ViewPageVisit;
use App\Filament\Resources\PageVisits\Schemas\PageVisitForm;
use App\Filament\Resources\PageVisits\Schemas\PageVisitInfolist;
use App\Filament\Resources\PageVisits\Tables\PageVisitsTable;
use App\Models\PageVisit;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class PageVisitResource extends Resource
{
    protected static ?string $model = PageVisit::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedEye;

    protected static ?string $recordTitleAttribute = 'path';

    public static function getNavigationBadge(): ?string
    {
        return (string) PageVisit::count();
    }

    public static function getNavigationBadgeColor(): string|array|null
    {
        return 'info';
    }

    public static function form(Schema $schema): Schema
    {
        return PageVisitForm::configure($schema);
    }

    public static function infolist(Schema $schema): Schema
    {
        return PageVisitInfolist::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PageVisitsTable::configure($table);
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
            'index' => ListPageVisits::route('/'),
            'create' => CreatePageVisit::route('/create'),
            'view' => ViewPageVisit::route('/{record}'),
            'edit' => EditPageVisit::route('/{record}/edit'),
        ];
    }
}
