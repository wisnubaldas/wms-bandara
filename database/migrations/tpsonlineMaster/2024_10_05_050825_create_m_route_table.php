<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_route', function (Blueprint $table) {
            $table->integer('noid')->primary();
            $table->string('airlinescode', 2);
            $table->string('flightno', 6);
            $table->string('origin', 5)->index('origin');
            $table->string('destination', 5)->index('destination');
            $table->boolean('void')->default(0);

            $table->foreign('airlinescode', 'm_route_ibfk_1')->references('airlinescode')->on('m_airlines');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_route');
    }
}
