<?php

namespace Database\Seeders;

use App\Models\Team;
use Illuminate\Database\Seeder;

class TeamSeeder extends Seeder
{
    public function run(): void
    {
        $teams = [
            ['name' => 'Fondateur', 'role' => 'Direction & stratégie', 'bio' => null, 'image' => 'assets/images/team-image1.png', 'linkedin_url' => '#', 'twitter_url' => '#', 'facebook_url' => '#', 'order' => 1],
            ['name' => 'Équipe technique', 'role' => 'Développement & produit', 'bio' => null, 'image' => 'assets/images/team-image2.png', 'linkedin_url' => '#', 'twitter_url' => null, 'facebook_url' => null, 'order' => 2],
            ['name' => 'Conseil médical', 'role' => 'Santé & conformité', 'bio' => null, 'image' => 'assets/images/team-image3.png', 'linkedin_url' => '#', 'twitter_url' => null, 'facebook_url' => null, 'order' => 3],
            ['name' => 'Membre 4', 'role' => 'Rôle à définir', 'bio' => null, 'image' => 'assets/images/team-image1.png', 'linkedin_url' => '#', 'twitter_url' => null, 'facebook_url' => null, 'order' => 4],
            ['name' => 'Membre 5', 'role' => 'Rôle à définir', 'bio' => null, 'image' => 'assets/images/team-image2.png', 'linkedin_url' => '#', 'twitter_url' => null, 'facebook_url' => null, 'order' => 5],
        ];

        foreach ($teams as $i => $t) {
            Team::updateOrCreate(
                ['order' => $t['order'], 'name' => $t['name']],
                array_merge($t, ['is_active' => true])
            );
        }
    }
}
