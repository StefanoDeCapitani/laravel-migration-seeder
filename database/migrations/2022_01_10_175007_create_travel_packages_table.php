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
            $table->string("title");
            $table->longText("description");
            $table->integer("max_guest");
            $table->integer("duration_days");
            $table->time("check_in");
            $table->time("check_out");
            $table->float('price_euros', 8, 2);
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
