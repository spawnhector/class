<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBorrowersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrowers', function (Blueprint $table) {
            $table->id();
            $table->integer('loan_amount');
            $table->unsignedBigInteger('branch_id');
            $table->string('loan_type');
            $table->string('status')->default(0);
            $table->string('employeer_name');
            $table->string('employment_duration');
            $table->string('full_nm');
            $table->integer('trn');
            $table->string('number');
            $table->string('email');
            $table->string('identity');
            $table->string('pay_slip');
            $table->string('poa');
            $table->string('job_letter');
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
        Schema::dropIfExists('borrowers');
    }
}
