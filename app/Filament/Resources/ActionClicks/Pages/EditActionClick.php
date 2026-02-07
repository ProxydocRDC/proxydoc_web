<?php

namespace App\Filament\Resources\ActionClicks\Pages;

use App\Filament\Resources\ActionClicks\ActionClickResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ViewAction;
use Filament\Resources\Pages\EditRecord;

class EditActionClick extends EditRecord
{
    protected static string $resource = ActionClickResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ViewAction::make(),
            DeleteAction::make(),
        ];
    }
}
