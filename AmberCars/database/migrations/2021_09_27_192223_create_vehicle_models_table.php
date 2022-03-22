<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehicleModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicle_models', function (Blueprint $table) {
            $table->id();
            $table->string('vhcl_model_nm');
            $table->string('year');
            $table->string('color');
            $table->string('cost');
            $table->string('condition');
            $table->string('mileage');
            $table->string('capacity');
            $table->string('driver_side');
            $table->string('trans_type');
            $table->foreignId('vehicle_type_id')->constrained('vehicle_types');
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
        Schema::dropIfExists('vehicle_models');
    }
}
