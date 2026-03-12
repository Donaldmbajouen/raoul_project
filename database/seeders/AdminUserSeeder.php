<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@raoulprojet.com'],
            [
                'name' => 'Admin',
                'is_admin' => true,
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
    }
}
