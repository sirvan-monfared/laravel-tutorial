<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'title' => fake()->sentence(),
            'slug' => str()->slug(fake()->words(rand(3,5), true)),
            'price' => fake()->numberBetween(1000, 1000000),
            'short_description' => fake()->paragraph(),
            'qty' => fake()->numberBetween(3, 25),
            'sku' => fake()->uuid(),
            'description' => fake()->paragraphs(5, true)
        ];
    }

//    public function configure()
//    {
//        return $this->afterCreating(function(Product $product) {
//            $product->colors()->attach(
//                Color::factory(3)->create()->pluck('id')->toArray()
//            );
//        });
//    }
}
