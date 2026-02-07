<?php

namespace App\Filament\Resources\PageVisits\Pages;

use App\Filament\Resources\PageVisits\PageVisitResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewPageVisit extends ViewRecord
{
    protected static string $resource = PageVisitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
