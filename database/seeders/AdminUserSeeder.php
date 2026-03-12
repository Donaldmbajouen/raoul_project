<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'email' => 'admin@raoulprojet.com',
            'is_admin' => true,
            'password' => Hash::make('password'), // Changez ce mot de passe!
            'email_verified_at' => now(),
        ]);
    }
}
