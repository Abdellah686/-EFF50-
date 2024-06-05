<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Ville::factory(10)->create(); // Create 10 Villes
        \App\Models\Habitant::factory(50)->create(); // Create 50 Habitants
    }
}
