<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\Category;
use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ad::factory(20)->create(function() {
            return [
                'category_id' => Category::hasParent()->inRandomOrder()->first(),
                'location_id' => Location::hasParent()->inRandomOrder()->first(),
            ];
        });
    }
}
