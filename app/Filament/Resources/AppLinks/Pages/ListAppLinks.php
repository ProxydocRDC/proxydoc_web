<?php

namespace App\Filament\Resources\AppLinks\Pages;

use App\Filament\Resources\AppLinks\AppLinkResource;
use Filament\Actions\Action;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;
use Filament\Support\Icons\Heroicon;

class ListAppLinks extends ListRecords
{
    protected static string $resource = AppLinkResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Action::make('qrCode')
                ->label('QR Code')
                ->icon(Heroicon::OutlinedQrCode)
                ->url(fn (): string => AppLinkResource::getUrl('qr-code')),
            Action::make('migrations')
                ->label('Migrations')
                ->icon(Heroicon::OutlinedArrowPath)
                ->url(fn (): string => AppLinkResource::getUrl('migrations')),
            CreateAction::make(),
        ];
    }
}
