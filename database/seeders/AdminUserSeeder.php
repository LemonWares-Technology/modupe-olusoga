<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@modupeolusoga.com'],
            [
                'name' => 'Modupe Olusoga',
                'password' => Hash::make('Modupe2026!'),
                'email_verified_at' => now(),
            ]
        );
    }
}
