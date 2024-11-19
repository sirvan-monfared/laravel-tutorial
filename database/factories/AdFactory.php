<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Location;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ad>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \GlassCode\PersianFaker\PersianFaker::create();
        $title= $faker->text()->word() . ' ' . $faker->text()->word() . ' ' . $faker->text()->word();
        return [
            'user_id' => User::factory(),
            'category_id' => Category::factory(),
            'location_id' => Location::factory(),
            'title' => $faker->text()->word() . ' ' . $faker->text()->word() . ' ' . $faker->text()->word(),
            'slug' => Str::slug($title),
            'description' => $faker->text()->paragraph() . '<br>' . $faker->text()->paragraph(),
            'price' => fake()->randomElement([null, rand(1000, 999999)]),
            'featured_image' => null
        ];
    }
}
