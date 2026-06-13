<?php

namespace App\Filament\Pages;

use App\Services\AppQrCodeService;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

class GenerateAppQrCode extends Page
{
  protected static string|\UnitEnum|null $navigationGroup = 'Application';

  protected static ?string $navigationLabel = 'QR Code application';

  protected static ?string $title = 'Générer le QR Code';

  protected static ?string $slug = 'app-qr-code';

  protected static ?int $navigationSort = 3;

  protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedQrCode;

  protected string $view = 'filament.pages.generate-app-qr-code';

  public bool $withLogo = true;

  /**
   * @return array<int, Action>
   */
  protected function getHeaderActions(): array
  {
    return [
      Action::make('downloadQrCode')
        ->label('Télécharger le QR Code')
        ->icon(Heroicon::OutlinedArrowDownTray)
        ->color('primary')
        ->action(fn () => AppQrCodeService::downloadResponse($this->withLogo)),
    ];
  }

  /**
   * @return array<string, mixed>
   */
  public function getViewData(): array
  {
    return [
      'redirectUrl' => AppQrCodeService::getRedirectUrl(),
      'logoAvailable' => AppQrCodeService::getLogoPath() !== null,
    ];
  }

  public function getSubheading(): string|Htmlable|null
  {
    return 'QR code pointant vers la page de redirection automatique vers l\'App Store ou le Play Store.';
  }
}
