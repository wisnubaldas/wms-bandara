<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstAirportTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_airport', function (Blueprint $table) {
            $table->integer('NumberId')->index('NumberId');
            $table->string('AirportCode', 3)->nullable();
            $table->string('CountryCode', 2)->nullable();
            $table->string('AirportName', 50)->nullable();
            $table->string('void', 1)->nullable();
            $table->timestamp('created_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_airport');
    }
}
