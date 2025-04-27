<?php

namespace Database\Factories;

use App\Models\Location;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Location>
 */
class LocationFactory extends Factory
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
                Location::factory()
            ]),
            'title' => $faker->location()->state(),
            'slug' => Str::slug(fake()->words(3, true))
        ];
    }
}
