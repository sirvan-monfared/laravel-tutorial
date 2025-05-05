<?php

namespace Database\Seeders;

use App\Models\Ad;
use App\Models\ChatService;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ChatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \GlassCode\PersianFaker\PersianFaker::create();

        $ad = Ad::find(36);
        $chat = ChatService::create($ad, $ad->owner, User::find(4));
        for($i = 1; $i <= 10; $i++) {
           $chat->messages()->create([
                'sender_id' => fake()->randomElement([1, 5]),
                'message' => $faker->sentence
            ]);
        }

        $ad = Ad::find(39);
        $chat = ChatService::create($ad, $ad->owner, User::find(5));
        for($i = 1; $i <= 10; $i++) {
           $chat->messages()->create([
                'sender_id' => fake()->randomElement([1, 5]),
                'message' => $faker->sentence
            ]);
        }

        $ad = Ad::find(4);
        $chat = ChatService::create($ad, $ad->owner, User::find(1));

        for($i = 1; $i <= 10; $i++) {
           $chat->messages()->create([
                'sender_id' => fake()->randomElement([1, 5]),
                'message' => $faker->sentence
            ]);
        }

        $ad = Ad::find(5);
        $chat = ChatService::create($ad, $ad->owner, User::find(1));
        for($i = 1; $i <= 10; $i++) {
           $chat->messages()->create([
                'sender_id' => fake()->randomElement([1, 5]),
                'message' => $faker->sentence
            ]);
        }
    }
}
