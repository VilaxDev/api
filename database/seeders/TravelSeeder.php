<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class TravelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            DB::table('travel')->insert([
                'name' => $faker->word,
                'description' => $faker->text,
                'location' => $faker->city,
                'image' => $faker->imageUrl(),
                'rating' => $faker->randomFloat(1, 1, 5),
                'visitors' => $faker->numberBetween(0, 1000),
                'category' => $faker->word,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
