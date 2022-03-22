<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRentedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renteds', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->bigInteger('vehicle_id')->unsigned();
            $table->foreign('vehicle_id')->references('id')->on('vehicles')->onDelete('cascade');
            $table->string('pickup_location');
            $table->string('dropoff_location');
            $table->string('child_seat'); 
            $table->string('gps_navigation'); 
            $table->string('additional_driver'); 
            $table->string('wifi_access'); 
            $table->string('winter_package'); 
            $table->string('bski_rack'); 
            $table->string('full_insurance'); 
            $table->string('pickup_date');
            $table->string('dropoff_date');
            $table->string('rented_days');
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
        Schema::dropIfExists('renteds');
    }
}
