<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// use Faker\Factory as Faker;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 0; $i < 1000; $i++) {
            $user = User::factory()->create([
                'name' => 'User ' . $i,
                'email' => 'user' . $i . '@example.com',
            ]);
        }
    }
}
