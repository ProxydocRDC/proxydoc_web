<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Ajoute les URLs de campagne QR (App Store / Play Store) à la table app_links.
   */
  public function up(): void
  {
    Schema::table('app_links', function (Blueprint $table) {
      $table->string('qr_app_store_url')->nullable()->after('play_store_url');
      $table->string('qr_play_store_url')->nullable()->after('qr_app_store_url');
    });

    DB::table('app_links')->update([
      'qr_app_store_url' => 'https://apple.co/44uhpIl?r=lp&m=Mpcejx2dj2q',
      'qr_play_store_url' => 'https://bit.ly/48DlhsV?r=lp&m=Mpcejx2dj2q',
      'updated_at' => now(),
    ]);
  }

  /**
   * Supprime les colonnes URLs QR de la table app_links.
   */
  public function down(): void
  {
    Schema::table('app_links', function (Blueprint $table) {
      $table->dropColumn(['qr_app_store_url', 'qr_play_store_url']);
    });
  }
};
