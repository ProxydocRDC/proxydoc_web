<?php

namespace App\Filament\Resources\ActionClicks\Pages;

use App\Filament\Resources\ActionClicks\ActionClickResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewActionClick extends ViewRecord
{
    protected static string $resource = ActionClickResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
