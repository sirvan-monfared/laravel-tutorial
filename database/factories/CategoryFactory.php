<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \GlassCode\PersianFaker\PersianFaker::create();
        return [
            'parent_id' => fake()->randomElements([
                null,
                Category::factory()
            ]),
            'title' => $faker->text()->word(),
            'slug' => Str::slug(fake()->unique()->words(3, true)),
            'icon' => null
        ];
    }
}
