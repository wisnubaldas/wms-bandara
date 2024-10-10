<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMFlightTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_flight', function (Blueprint $table) {
            $table->integer('noid')->primary();
            $table->string('airlinescode', 2);
            $table->string('flightno', 6);
            $table->string('TimeDeparture', 5)->default('0');
            $table->string('TimeArrival', 5);
            $table->string('route', 6)->nullable();
            $table->boolean('void')->default(0);
            $table->string('In_Out', 1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_flight');
    }
}
