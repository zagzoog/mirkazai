<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Admin',
            'surname' => 'User',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'type' => 'admin',
            'status' => true,
            'remaining_words' => 0,
            'remaining_images' => 0,
            'avatar' => 'assets/img/auth/default-avatar.png',
        ]);
    }
} 