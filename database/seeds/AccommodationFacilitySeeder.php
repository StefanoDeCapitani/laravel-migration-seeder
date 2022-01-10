<?php

use Faker\Generator as Faker;
use App\AccommodationFacility;
use Illuminate\Database\Seeder;

class AccommodationFacilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for($i = 0; $i < 10; $i++){
            $newAccommodationFacility = new AccommodationFacility();
            $newAccommodationFacility->name = $faker->sentence(3);
            $newAccommodationFacility->address = $faker->regexify("\d{1,5}\s\w.\s(\b\w*\b\s){1,2}\w*\.");
            $newAccommodationFacility->save();
        }
    }
}
