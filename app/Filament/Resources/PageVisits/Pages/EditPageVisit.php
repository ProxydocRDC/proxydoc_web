<?php

namespace App\Filament\Resources\PageVisits\Pages;

use App\Filament\Resources\PageVisits\PageVisitResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditPageVisit extends EditRecord
{
    protected static string $resource = PageVisitResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
