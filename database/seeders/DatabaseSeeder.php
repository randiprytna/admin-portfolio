<?php

namespace Database\Seeders;

use App\Models\Admin;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Admin::create([
            'name' => 'Muhammad Randi Nur Priyatna',
            'email' => 'muhammadrandinurpriyatna@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Super123*Admin'),
            'remember_token' => Str::random(10),
            'image_path' => '/img/foto-profil.jpeg',
            'image_url' => config('app.url') . '/img/foto-profil.jpeg'
        ]);
    }
}
