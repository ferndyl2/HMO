<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompanyfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companyfiles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('hmo_code');
            $table->text('hmo_desc');
            $table->text('hmo_sfx');
            $table->text('hmo_status');
            $table->integer('credit_limit');
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
        Schema::dropIfExists('companyfiles');
    }
}
