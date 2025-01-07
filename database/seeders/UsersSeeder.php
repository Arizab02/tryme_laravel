<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //in i untuk mengi
        $faker = Faker::create('id_ID');

        for ($i = 0; $i < 10; $i++) {
            \DB::table('users')->insert([
                'name' => $faker->name,
                'email' => $faker->unique()->safeEmail(),
                // 'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
