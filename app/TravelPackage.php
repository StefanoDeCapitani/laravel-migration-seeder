<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TravelPackage extends Model
{
    protected $guards = [];

    public function flights(){
        return $this->belongsToMany("App\Flight");
    }

}
