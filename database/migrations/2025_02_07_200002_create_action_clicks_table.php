<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('action_clicks', function (Blueprint $table) {
            $table->id();
            $table->string('action_name', 100)->index();
            $table->string('context', 255)->nullable();
            $table->string('session_id', 100)->nullable()->index();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('action_clicks');
    }
};
