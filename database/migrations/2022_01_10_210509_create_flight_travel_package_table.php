<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightTravelPackageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_travel_package', function (Blueprint $table) {
            $table->bigInteger('flight_id')->unsigned();
            $table->foreign('flight_id')->references('id')->on('flights');
            $table->bigInteger('travel_package_id')->unsigned();
            $table->foreign('travel_package_id')->references('id')->on('travel_packages');
            $table->string("outbound_or_return")->required();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flight_travel_package');
    }
}
