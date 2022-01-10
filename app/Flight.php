<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    protected $guards = [];

    public function travelPackages(){
        return $this->belongsToMany("App\TravelPackage");
    }
}
