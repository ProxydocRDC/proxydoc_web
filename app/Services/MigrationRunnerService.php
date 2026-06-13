<?php

namespace App\Services;

use Illuminate\Database\Migrations\Migrator;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Artisan;

class MigrationRunnerService
{
  /**
   * @param Migrator $migrator Service Laravel de gestion des migrations
   */
  public function __construct(
    protected Migrator $migrator
  ) {
  }

  /**
   * Retourne la liste des migrations avec leur statut (exécutée ou en attente).
   *
   * @return Collection<int, array{name: string, file: string, status: string, batch: int|null}>
   */
  public function getMigrationStatuses(): Collection
  {
    $this->migrator->setConnection(config('database.default'));

    $files = $this->migrator->getMigrationFiles($this->getMigrationPaths());
    $ran = collect($this->migrator->getRepository()->getRan());
    $batches = $this->getMigrationBatches();

    return collect($files)
      ->sortKeys()
      ->map(function (string $file, string $name) use ($ran, $batches) {
        $isExecuted = $ran->contains($name);

        return [
          'name' => $name,
          'file' => $file,
          'status' => $isExecuted ? 'executed' : 'pending',
          'batch' => $isExecuted ? ($batches[$name] ?? null) : null,
        ];
      })
      ->values();
  }

  /**
   * Compte le nombre de migrations encore en attente.
   *
   * @return int Nombre de migrations pending
   */
  public function countPending(): int
  {
    return $this->getMigrationStatuses()->where('status', 'pending')->count();
  }

  /**
   * Exécute les migrations en attente dans l'ordre (ignore celles déjà appliquées).
   *
   * @return array{success: bool, output: string, executed_count: int, pending_count: int, message: string}
   */
  public function runPending(): array
  {
    $pendingBefore = $this->countPending();

    if ($pendingBefore === 0) {
      return [
        'success' => true,
        'output' => 'Nothing to migrate.',
        'executed_count' => 0,
        'pending_count' => 0,
        'message' => 'Aucune migration en attente. Toutes les migrations sont déjà appliquées.',
      ];
    }

    try {
      Artisan::call('migrate', ['--force' => true]);
      $output = trim(Artisan::output());
      $pendingAfter = $this->countPending();
      $executedCount = max(0, $pendingBefore - $pendingAfter);

      return [
        'success' => true,
        'output' => $output,
        'executed_count' => $executedCount,
        'pending_count' => $pendingAfter,
        'message' => $executedCount > 0
          ? "{$executedCount} migration(s) exécutée(s) avec succès."
          : 'Aucune nouvelle migration appliquée.',
      ];
    } catch (\Throwable $exception) {
      report($exception);

      return [
        'success' => false,
        'output' => $exception->getMessage(),
        'executed_count' => 0,
        'pending_count' => $this->countPending(),
        'message' => 'Erreur lors de l\'exécution des migrations : '.$exception->getMessage(),
      ];
    }
  }

  /**
   * Retourne les chemins contenant les fichiers de migration.
   *
   * @return array<int, string>
   */
  protected function getMigrationPaths(): array
  {
    $paths = $this->migrator->paths();

    if (count($paths) > 0) {
      return $paths;
    }

    return [database_path('migrations')];
  }

  /**
   * Associe chaque migration exécutée à son numéro de batch.
   *
   * @return array<string, int>
   */
  protected function getMigrationBatches(): array
  {
    return $this->migrator->getRepository()->getMigrationBatches();
  }
}
