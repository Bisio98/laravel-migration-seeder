<?php

use Illuminate\Database\Seeder;
use App\Trip;
use Faker\Generator as Faker;

class TripsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i=0; $i<10;$i++){
            $new_trip = new Trip();
            $new_trip->location = $faker->state();
            $new_trip->start_trip = $faker->dateTime();
            $new_trip->end_trip = $faker->dateTime();
            $new_trip->available = rand(0,1);
            $new_trip->price = rand(100,10000);
            $new_trip->save();
        }
    }
}
 