<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientdatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patientdatas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('h_code');
            $table->text('h_desc');
            $table->integer('patient_codes');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_initial');
            $table->string('dependent');
            $table->text('date_avail');
            $table->integer('i_code');
            $table->text('i_desc');
            $table->integer('sundries');
            $table->integer('prof_fee');
            $table->integer('credits');
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
        Schema::dropIfExists('patientdatas');
    }
}
