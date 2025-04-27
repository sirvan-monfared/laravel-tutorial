<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Location;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Database\Factories\CategoryFactory;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'Test User',
            'phone' => '09123456789',
        ]);

        $this->call([
            CategorySeeder::class,
            LocationSeeder::class,
            AdSeeder::class
        ]);
    }
}
