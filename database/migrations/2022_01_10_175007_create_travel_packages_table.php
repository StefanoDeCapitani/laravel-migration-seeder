<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelPackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('travel_packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger("accommodation_facility_id")->unsigned();
            $table->foreign("accommodation_facility_id")->references("id")->on('accommodation_facilities');
            $table->string("title")->required();
            $table->longText("description")->required();
            $table->integer("max_guest")->required();
            $table->integer("duration_days")->required();
            $table->time("check_in")->required();
            $table->time("check_out")->required();
            $table->bigInteger("outbound_flight_id")->unsigned();
            $table->foreign("outbound_flight_id")->references("id")->on("flights");
            $table->bigInteger("return_flight_id")->unsigned();
            $table->foreign("return_flight_id")->references("id")->on("flights");
            $table->decimal("price_euros")->required();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('travel_packages');
    }
}
