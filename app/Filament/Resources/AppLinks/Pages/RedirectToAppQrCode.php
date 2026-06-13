<?php

namespace App\Filament\Resources\AppLinks\Pages;

use App\Filament\Pages\GenerateAppQrCode as GenerateAppQrCodePage;
use App\Filament\Resources\AppLinks\AppLinkResource;
use Filament\Resources\Pages\Page;

class RedirectToAppQrCode extends Page
{
  protected static string $resource = AppLinkResource::class;

  protected static bool $shouldRegisterNavigation = false;

  protected static ?string $slug = 'qr-code';

  protected string $view = 'filament.pages.legacy-redirect';

  /**
   * Redirige l'ancienne URL vers la page QR code dédiée.
   */
  public function mount(): void
  {
    $this->redirect(GenerateAppQrCodePage::getUrl(), navigate: false);
  }
}
