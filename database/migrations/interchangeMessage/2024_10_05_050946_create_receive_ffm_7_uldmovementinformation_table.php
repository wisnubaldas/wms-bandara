<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveFfm7UldmovementinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_ffm_7_uldmovementinformation', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('AirportCodeOfNextDestination', 3)->nullable();
            $table->string('CarrierCode', 2)->nullable();
            $table->string('FlightNumber', 4)->nullable();
            $table->string('DayOfScheduleDeparture', 2)->nullable();
            $table->string('MonthOfScheduleDeparture', 3)->nullable();
            $table->string('ULDVolumeAvailableCode', 1)->nullable();
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
        Schema::dropIfExists('receive_ffm_7_uldmovementinformation');
    }
}
