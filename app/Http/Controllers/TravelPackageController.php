<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TravelPackage;

class TravelPackageController extends Controller
{
    public function index(){
        $travel_packages = TravelPackage::all();
        return $travel_packages;
    }
}
