<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    public function run(): void
    {
        $partners = [
            ['name' => 'Partner 1', 'logo' => 'assets/images/partner1.png', 'url' => null, 'order' => 1],
            ['name' => 'Partner 2', 'logo' => 'assets/images/partner2.png', 'url' => null, 'order' => 2],
            ['name' => 'Partner 3', 'logo' => 'assets/images/partner3.png', 'url' => null, 'order' => 3],
            ['name' => 'Partner 4', 'logo' => 'assets/images/partner4.png', 'url' => null, 'order' => 4],
            ['name' => 'Partner 5', 'logo' => 'assets/images/partner5.png', 'url' => null, 'order' => 5],
        ];

        foreach ($partners as $p) {
            Partner::updateOrCreate(
                ['order' => $p['order'], 'name' => $p['name']],
                array_merge($p, ['is_active' => true])
            );
        }
    }
}
