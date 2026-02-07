<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            ['name' => 'ProxyChat', 'slug' => 'proxychat', 'description' => 'Consultations en ligne avec des médecins généralistes et spécialistes par chat, appel vocal ou vidéo dans l’application.', 'icon' => 'assets/images/feature-marketicon.png', 'order' => 1],
            ['name' => 'ProxyChem', 'slug' => 'proxychem', 'description' => 'Pharmacie en ligne pour acheter des produits pharmaceutiques et se faire livrer rapidement à domicile.', 'icon' => 'assets/images/feature-graphicon.png', 'order' => 2],
            ['name' => 'ProxyFamily', 'slug' => 'proxyfamily', 'description' => 'Suivi de santé par un médecin de famille et consultations à domicile programmées selon vos besoins.', 'icon' => 'assets/images/feature-supporticon.png', 'order' => 3],
            ['name' => 'ProxyGency', 'slug' => 'proxygency', 'description' => 'Organisation des soins d’urgence et déclenchement d’une assistance médicale par ambulance.', 'icon' => 'assets/images/feature-guideicon.png', 'order' => 4],
        ];

        foreach ($services as $s) {
            Service::updateOrCreate(
                ['slug' => $s['slug']],
                array_merge($s, ['is_active' => true])
            );
        }
    }
}
