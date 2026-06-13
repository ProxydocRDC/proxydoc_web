<?php

namespace App\Filament\Pages;

use App\Services\MigrationRunnerService;
use BackedEnum;
use Filament\Actions\Action;
use Filament\Notifications\Notification;
use Filament\Pages\Page;
use Filament\Support\Icons\Heroicon;
use Illuminate\Contracts\Support\Htmlable;

class ManageMigrations extends Page
{
  protected static string|\UnitEnum|null $navigationGroup = 'Application';

  protected static ?string $navigationLabel = 'Migrations';

  protected static ?string $title = 'Migrations base de données';

  protected static ?string $slug = 'app-migrations';

  protected static ?int $navigationSort = 2;

  protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedArrowPath;

  protected string $view = 'filament.pages.manage-migrations';

  public string $lastOutput = '';

  /**
   * @return array<int, Action>
   */
  protected function getHeaderActions(): array
  {
    return [
      Action::make('runMigrations')
        ->label('Exécuter les migrations en attente')
        ->icon(Heroicon::OutlinedPlay)
        ->color('primary')
        ->requiresConfirmation()
        ->modalHeading('Exécuter les migrations')
        ->modalDescription('Les migrations déjà appliquées ou déjà présentes en base de données seront ignorées automatiquement. Seules les migrations réellement manquantes seront exécutées.')
        ->modalSubmitActionLabel('Exécuter')
        ->action(function (MigrationRunnerService $migrationRunnerService): void {
          $result = $migrationRunnerService->runPending();
          $this->lastOutput = $result['output'];

          $notification = Notification::make()
            ->title($result['success'] ? 'Migrations terminées' : 'Erreur migrations')
            ->body($result['message']);

          if ($result['success']) {
            $notification->success();
          } else {
            $notification->danger();
          }

          $notification->send();
        }),
    ];
  }

  /**
   * @return array<string, mixed>
   */
  public function getViewData(): array
  {
    $migrationRunnerService = app(MigrationRunnerService::class);

    return [
      'migrations' => $migrationRunnerService->getMigrationStatuses(),
      'pendingCount' => $migrationRunnerService->countPending(),
      'lastOutput' => $this->lastOutput,
    ];
  }

  public function getSubheading(): string|Htmlable|null
  {
    return 'Exécutez les migrations en attente. Celles déjà présentes en base sont ignorées.';
  }
}
