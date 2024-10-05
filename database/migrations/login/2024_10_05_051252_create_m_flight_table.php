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
            $table->integer('_id')->primary();
            $table->string('WarehouseCode', 5)->nullable()->index('WarehouseCode');
            $table->string('TwoLetterCode', 2)->nullable()->index('TwoLetterCode');
            $table->string('FlightNumber', 6)->nullable()->index('FlightNumber');
            $table->string('TimeDeparture', 5)->nullable();
            $table->string('TimeArrival', 5)->nullable();
            $table->string('KodeGudangByCustom', 5)->nullable();
            $table->integer('Void')->default(0);
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
        Schema::dropIfExists('m_flight');
    }
}
