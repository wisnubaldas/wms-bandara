<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMAirlinesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_airlines', function (Blueprint $table) {
            $table->string('airlinescode', 2)->primary();
            $table->string('airlinesname', 50);
            $table->string('countryID', 2)->index('countryID');
            $table->integer('void')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_airlines');
    }
}
