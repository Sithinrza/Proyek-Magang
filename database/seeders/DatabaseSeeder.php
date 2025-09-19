<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;
    
    public function run(): void
    {
        // Cukup panggil semua seeder yang Anda butuhkan di sini
        // dalam satu blok pemanggilan.
        $this->call([
            UserSeeder::class,
            // PostSeeder::class,   // Hapus komentar jika Anda punya seeder ini
            // CommentSeeder::class, // Hapus komentar jika Anda punya seeder ini
        ]);
    }
}