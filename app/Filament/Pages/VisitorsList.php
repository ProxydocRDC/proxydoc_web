<?php

namespace App\Filament\Pages;

use App\Services\TrackingService;
use Filament\Pages\Page;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

class VisitorsList extends Page
{
    protected static string|\UnitEnum|null $navigationGroup = 'Analytics';

    protected static ?string $navigationLabel = 'Visiteurs';

    protected static ?string $title = 'Visiteurs (pays, IP, temps sur le site)';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedUserGroup;

    protected static ?int $navigationSort = 2;

    protected string $view = 'filament.pages.visitors-list';

    public function getViewData(): array
    {
        return [
            'visitors' => TrackingService::visitorsList(),
        ];
    }
}
