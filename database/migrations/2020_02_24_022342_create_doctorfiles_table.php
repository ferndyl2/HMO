<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctorfiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('doctors_code');
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_initial');
            $table->text('specialty');
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
        Schema::dropIfExists('doctorfiles');
    }
}
