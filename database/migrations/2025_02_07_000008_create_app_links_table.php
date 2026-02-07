<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('app_links', function (Blueprint $table) {
            $table->id();
            $table->string('app_store_url')->nullable();
            $table->string('play_store_url')->nullable();
            $table->timestamps();
        });

        DB::table('app_links')->insert([
            'app_store_url' => 'https://apps.apple.com/cd/app/proxydoc/id6752807730?l=fr-FR',
            'play_store_url' => 'https://play.google.com/store/apps/details?id=org.proxydoc.mobileapp',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('app_links');
    }
};
