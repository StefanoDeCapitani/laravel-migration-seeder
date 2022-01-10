<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\Flight;

class FlightSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $flight = new Flight();
            $flight->departure_airport = $faker->sentence(3);
            $flight->departure_date = $faker->dateTimeInInterval('+2days', '+2 years');
            $flight->arrival_airport = $faker->sentence(3);
            $flight->arrival_date = $faker->dateTimeInInterval('+2days', '+2 years');;
            $flight->company = $faker->sentence(3);
            $flight->save();
        }
    }
}
