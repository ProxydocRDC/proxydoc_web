<?php

namespace App\Providers;

use App\Models\AppLink;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $appLinks = null;
        if (Schema::hasTable('app_links')) {
            $appLinks = AppLink::first();
        }
        if (! $appLinks) {
            $appLinks = new AppLink([
                'app_store_url' => 'https://apps.apple.com/cd/app/proxydoc/id6752807730?l=fr-FR',
                'play_store_url' => 'https://play.google.com/store/apps/details?id=org.proxydoc.mobileapp',
            ]);
        }
        View::share('appLinks', $appLinks);
    }
}
