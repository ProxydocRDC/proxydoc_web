<?php

namespace App\Services;

use Illuminate\Database\Migrations\Migrator;
use Illuminate\Database\QueryException;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Schema;

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
    $this->prepareMigrator();

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
   * Exécute les migrations en attente dans l'ordre et ignore celles déjà présentes en base.
   *
   * @return array{success: bool, output: string, executed_count: int, skipped_count: int, pending_count: int, message: string}
   */
  public function runPending(): array
  {
    $this->prepareMigrator();

    $outputLines = [];
    $skippedNames = $this->markAlreadyAppliedPendingMigrations($outputLines);
    $pendingBefore = $this->countPending();

    if ($pendingBefore === 0) {
      return [
        'success' => true,
        'output' => implode(PHP_EOL, $outputLines),
        'executed_count' => 0,
        'skipped_count' => count($skippedNames),
        'pending_count' => 0,
        'message' => $this->buildResultMessage(0, count($skippedNames), 0),
      ];
    }

    try {
      $executedCount = $this->runPendingOneByOne($outputLines, $skippedNames);
      $pendingAfter = $this->countPending();

      return [
        'success' => true,
        'output' => implode(PHP_EOL, array_filter($outputLines)),
        'executed_count' => $executedCount,
        'skipped_count' => count($skippedNames),
        'pending_count' => $pendingAfter,
        'message' => $this->buildResultMessage($executedCount, count($skippedNames), $pendingAfter),
      ];
    } catch (\Throwable $exception) {
      report($exception);

      return [
        'success' => false,
        'output' => implode(PHP_EOL, array_filter($outputLines)).PHP_EOL.$exception->getMessage(),
        'executed_count' => 0,
        'skipped_count' => count($skippedNames),
        'pending_count' => $this->countPending(),
        'message' => 'Erreur lors de l\'exécution des migrations : '.$exception->getMessage(),
      ];
    }
  }

  /**
   * Marque comme exécutées les migrations dont les structures existent déjà en base.
   *
   * @param array<int, string> $outputLines Journal des opérations
   * @return array<int, string> Noms des migrations ignorées
   */
  protected function markAlreadyAppliedPendingMigrations(array &$outputLines): array
  {
    $skippedNames = [];
    $batch = $this->migrator->getRepository()->getNextBatchNumber();

    foreach ($this->getPendingMigrations() as $name => $file) {
      if (! $this->isMigrationAlreadyApplied($file)) {
        continue;
      }

      $this->migrator->getRepository()->log($name, $batch);
      $skippedNames[] = $name;
      $outputLines[] = "Ignorée (déjà en base) : {$name}";
    }

    return $skippedNames;
  }

  /**
   * Exécute les migrations restantes une par une.
   *
   * @param array<int, string> $outputLines Journal des opérations
   * @param array<int, string> $skippedNames Liste des migrations déjà ignorées
   * @return int Nombre de migrations exécutées
   */
  protected function runPendingOneByOne(array &$outputLines, array &$skippedNames): int
  {
    $executedCount = 0;

    while ($this->countPending() > 0) {
      $pending = $this->getPendingMigrations();

      if ($pending->isEmpty()) {
        break;
      }

      $name = $pending->keys()->first();
      $file = $pending->first();

      try {
        $this->migrator->run([$file]);
        $executedCount++;
        $outputLines[] = "Exécutée : {$name}";
      } catch (\Throwable $exception) {
        if (! $this->isAlreadyExistsException($exception)) {
          throw $exception;
        }

        $batch = $this->migrator->getRepository()->getNextBatchNumber();
        $this->migrator->getRepository()->log($name, $batch);
        $skippedNames[] = $name;
        $outputLines[] = "Ignorée (conflit détecté) : {$name}";
      }
    }

    return $executedCount;
  }

  /**
   * Retourne les migrations en attente triées par nom.
   *
   * @return Collection<string, string> Nom => chemin du fichier
   */
  protected function getPendingMigrations(): Collection
  {
    $files = $this->migrator->getMigrationFiles($this->getMigrationPaths());
    $ran = $this->migrator->getRepository()->getRan();

    return collect($files)
      ->reject(fn (string $file, string $name) => in_array($name, $ran, true))
      ->sortKeys();
  }

  /**
   * Détermine si une migration a déjà été appliquée manuellement en base.
   *
   * @param string $file Chemin absolu du fichier de migration
   * @return bool True si la structure cible existe déjà
   */
  protected function isMigrationAlreadyApplied(string $file): bool
  {
    $content = file_get_contents($file);

    if ($content === false) {
      return false;
    }

    if (preg_match_all("/Schema::create\s*\(\s*['\"]([^'\"]+)['\"]/", $content, $createMatches)) {
      foreach ($createMatches[1] as $tableName) {
        if (! Schema::hasTable($tableName)) {
          return false;
        }
      }

      return count($createMatches[1]) > 0;
    }

    if (preg_match("/Schema::table\s*\(\s*['\"]([^'\"]+)['\"]/", $content, $tableMatch)) {
      $tableName = $tableMatch[1];

      if (! Schema::hasTable($tableName)) {
        return false;
      }

      if (! preg_match_all('/\$table->[a-zA-Z_]+\(\s*[\'"]([^\'"]+)[\'"]/', $content, $columnMatches)) {
        return false;
      }

      foreach ($columnMatches[1] as $columnName) {
        if (! Schema::hasColumn($tableName, $columnName)) {
          return false;
        }
      }

      return count($columnMatches[1]) > 0;
    }

    return false;
  }

  /**
   * Indique si l'exception correspond à une structure déjà existante en base.
   *
   * @param \Throwable $exception Exception levée pendant une migration
   * @return bool True si l'erreur peut être ignorée
   */
  protected function isAlreadyExistsException(\Throwable $exception): bool
  {
    if ($exception instanceof QueryException) {
      $errorCode = (int) ($exception->errorInfo[1] ?? 0);

      if (in_array($errorCode, [1050, 1060, 1061], true)) {
        return true;
      }
    }

    $message = strtolower($exception->getMessage());

    return str_contains($message, 'already exists')
      || str_contains($message, 'duplicate column')
      || str_contains($message, 'duplicate key name');
  }

  /**
   * Construit le message utilisateur après synchronisation des migrations.
   *
   * @param int $executedCount Nombre de migrations exécutées
   * @param int $skippedCount Nombre de migrations ignorées
   * @param int $pendingCount Nombre de migrations encore en attente
   * @return string Message récapitulatif
   */
  protected function buildResultMessage(int $executedCount, int $skippedCount, int $pendingCount): string
  {
    if ($executedCount === 0 && $skippedCount === 0 && $pendingCount === 0) {
      return 'Aucune migration en attente. Toutes les migrations sont déjà appliquées.';
    }

    $parts = [];

    if ($executedCount > 0) {
      $parts[] = "{$executedCount} migration(s) exécutée(s)";
    }

    if ($skippedCount > 0) {
      $parts[] = "{$skippedCount} migration(s) ignorée(s) (déjà présentes en base)";
    }

    if ($pendingCount > 0) {
      $parts[] = "{$pendingCount} migration(s) encore en attente";
    }

    return ucfirst(implode(', ', $parts)).'.';
  }

  /**
   * Initialise le migrator sur la connexion par défaut.
   */
  protected function prepareMigrator(): void
  {
    $this->migrator->setConnection(config('database.default'));
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
