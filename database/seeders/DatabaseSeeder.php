<?php

namespace Database\Seeders;

use App\Models\Address;
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

//        User::factory()->create([
//            'name' => 'Test User',
//            'email' => 'test@example.com',
//        ]);
//        Address::factory(5)->create();

        $users = User::factory(5)->create();
        foreach ($users as $user) {
            Address::factory(rand(2, 5))->create([
                'user_id' => $user->id
            ]);
        }
    }
}
