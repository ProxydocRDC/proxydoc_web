<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AppLink extends Model
{
    protected $fillable = ['app_store_url', 'play_store_url'];

    protected $table = 'app_links';

    /**
     * Récupère l'instance unique des liens (premier enregistrement).
     */
    public static function get(): ?self
    {
        return static::first();
    }
}
