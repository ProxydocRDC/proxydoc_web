<?php

namespace App\Filament\Resources\AppLinks\Pages;

use App\Filament\Pages\ManageMigrations as ManageMigrationsPage;
use App\Filament\Resources\AppLinks\AppLinkResource;
use Filament\Resources\Pages\Page;

class RedirectToAppMigrations extends Page
{
  protected static string $resource = AppLinkResource::class;

  protected static bool $shouldRegisterNavigation = false;

  protected static ?string $slug = 'migrations';

  protected string $view = 'filament.pages.legacy-redirect';

  /**
   * Redirige l'ancienne URL vers la page migrations dédiée.
   */
  public function mount(): void
  {
    $this->redirect(ManageMigrationsPage::getUrl(), navigate: false);
  }
}
