<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('student_id');
            $table->string('student_name');
            $table->string('student_username');
            $table->string('student_country');
            $table->string('student_phone');
            $table->string('student_email');
            $table->string('student_photo')->nullable();
            $table->string('password');
            $table->string('student_coureses')->nullable();
            $table->integer('student_base')->default(0);
            $table->integer('student_type')->default(0);
            $table->integer('student_status')->default(0);
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
        Schema::dropIfExists('students');
    }
}
