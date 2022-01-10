<?php

use Faker\Generator as Faker;
use Illuminate\Database\Seeder;
use App\TravelPackage;
use App\Flight;
use App\AccommodationFacility;

class TravelPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $flights = Flight::all()->pluck('id')->toArray();
        $accomodation_facilities = AccommodationFacility::all()->pluck('id')->toArray();

        for($i = 0; $i < 10; $i++){
            $newTravelPackage = new TravelPackage();
            $newTravelPackage->accommodation_facility_id = $faker->randomElement($accomodation_facilities);
            $newTravelPackage->title = $faker->text(80);
            $newTravelPackage->description = $faker->text(500);
            $newTravelPackage->max_guest = $faker->randomDigit();
            $newTravelPackage->duration_days = $faker->randomNumber(2, false);
            $newTravelPackage->check_in = $faker->time();
            $newTravelPackage->check_out = $faker->time();
            $newTravelPackage->price_euros = $faker->randomFloat(1, 20, 30);
            $newTravelPackage->save();

            $newTravelPackage->flights()->attach([
                $faker->randomElement($flights) => ["outbound_or_return" => "outbound"],
                $faker->randomElement($flights) => ["outbound_or_return" => "return"]
            ]);
        }
    }
}
