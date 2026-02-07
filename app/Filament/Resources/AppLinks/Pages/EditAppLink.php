<?php

namespace App\Filament\Resources\AppLinks\Pages;

use App\Filament\Resources\AppLinks\AppLinkResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditAppLink extends EditRecord
{
    protected static string $resource = AppLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
