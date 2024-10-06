<?php

namespace Database\Seeders;

use App\Models\Color;
use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
//        Product::factory(10)->create();

        $this->call(ProductSeeder::class);

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

//        $colors = Color::factory(5)->create();

//        foreach ($colors as $color) {
//            $products = Product::factory(3)->create();
//            $products->each(function(Product $product) use ($color) {
//                $product->colors()->attach($color);
//            });
//        }

//        Product::factory(2)->create();
    }
}
