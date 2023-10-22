<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i <= 100; $i++) {
            $train = new Train();
            $train->company = $faker->userName();
            $train->departure_station = $faker->city();
            $train->arrival_station = $faker->city();
            $train->departure = $faker->time();
            $train->arrival = $faker->time();
            $train->carriages = $faker->randomDigit();
            $train->delayed = $faker->boolean();
            $train->canceled = $faker->boolean();
        }
    }
}
