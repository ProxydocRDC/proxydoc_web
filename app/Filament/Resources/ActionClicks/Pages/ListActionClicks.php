<?php

namespace App\Filament\Resources\ActionClicks\Pages;

use App\Filament\Resources\ActionClicks\ActionClickResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListActionClicks extends ListRecords
{
    protected static string $resource = ActionClickResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
