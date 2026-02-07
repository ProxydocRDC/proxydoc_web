<?php

namespace Database\Seeders;

use App\Models\ArticleCategory;
use Illuminate\Database\Seeder;

class ArticleCategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            ['name' => 'Actualités santé', 'slug' => 'actualites-sante', 'description' => 'Actualités et conseils santé', 'order' => 1],
            ['name' => 'Conseils pratiques', 'slug' => 'conseils-pratiques', 'description' => 'Conseils et bonnes pratiques', 'order' => 2],
            ['name' => 'ProxyDoc', 'slug' => 'proxydoc', 'description' => 'Nouvelles de la plateforme', 'order' => 3],
        ];

        foreach ($categories as $c) {
            ArticleCategory::updateOrCreate(
                ['slug' => $c['slug']],
                $c
            );
        }
    }
}
