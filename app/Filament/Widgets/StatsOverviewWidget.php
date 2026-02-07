<?php

namespace App\Filament\Widgets;

use App\Services\TrackingService;
use Filament\Widgets\StatsOverviewWidget as BaseStatsOverviewWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverviewWidget extends BaseStatsOverviewWidget
{
    protected function getStats(): array
    {
        $tracking = app(TrackingService::class);
        $totalViews = $tracking->totalPageViews();
        $uniqueVisitors = $tracking->uniqueVisitors();
        $clicksByAction = $tracking->clicksByAction();
        $totalClicks = collect($clicksByAction)->sum();

        return [
            Stat::make('Vues de pages', number_format($totalViews, 0, ',', ' '))
                ->description('Total des chargements de pages'),
            Stat::make('Visiteurs uniques', number_format($uniqueVisitors, 0, ',', ' '))
                ->description('Sessions distinctes'),
            Stat::make('Clics sur actions', number_format($totalClicks, 0, ',', ' '))
                ->description('App Store, Play Store, CTA, etc.'),
        ];
    }
}
