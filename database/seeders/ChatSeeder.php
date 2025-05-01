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
        $ad = Ad::find(36);
        ChatService::create($ad, $ad->owner, User::find(4));

        $ad = Ad::find(39);
        ChatService::create($ad, $ad->owner, User::find(5));

        $ad = Ad::find(4);
        ChatService::create($ad, $ad->owner, User::find(1));

        $ad = Ad::find(5);
        ChatService::create($ad, $ad->owner, User::find(1));
    }
}
