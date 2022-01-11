<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccommodationFacility extends Model
{
    protected $guards = [];

    public function travel_packages(){
        return $this->hasMany("App\TravelPackage");
    }
}
