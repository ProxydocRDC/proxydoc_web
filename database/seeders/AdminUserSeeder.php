<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Crée l'utilisateur admin ProxyDoc.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'silasjmas@gmail.com'],
            [
                'name' => 'Admin ProxyDoc',
                'password' => Hash::make('silasmas'),
            ]
        );
    }
}
