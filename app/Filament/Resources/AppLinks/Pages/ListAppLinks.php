<?php

namespace App\Filament\Resources\AppLinks\Pages;

use App\Filament\Resources\AppLinks\AppLinkResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListAppLinks extends ListRecords
{
    protected static string $resource = AppLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
