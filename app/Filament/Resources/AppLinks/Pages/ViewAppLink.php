<?php

namespace App\Filament\Resources\AppLinks\Pages;

use App\Filament\Resources\AppLinks\AppLinkResource;
use Filament\Actions\EditAction;
use Filament\Resources\Pages\ViewRecord;

class ViewAppLink extends ViewRecord
{
    protected static string $resource = AppLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            EditAction::make(),
        ];
    }
}
