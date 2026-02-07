<?php

namespace App\Filament\Pages;

use App\Services\TrackingService;
use Filament\Pages\Page;
use BackedEnum;
use Filament\Support\Icons\Heroicon;

class MostVisitedPages extends Page
{
    protected static string|\UnitEnum|null $navigationGroup = 'Analytics';

    protected static ?string $navigationLabel = 'Pages les plus visitées';

    protected static ?string $title = 'Pages les plus visitées';

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedChartBar;

    protected static ?int $navigationSort = 1;

    protected string $view = 'filament.pages.most-visited-pages';

    public function getViewData(): array
    {
        return [
            'pages' => TrackingService::mostVisitedPages(),
        ];
    }
}
