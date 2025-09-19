<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User; // <-- Gunakan Model User
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Buat satu user spesifik untuk login admin
        User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('12345'),
        ]);

        // (Opsional) Jika Anda ingin membuat banyak user palsu untuk testing
        // User::factory()->count(10)->create();
    }
}
