<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFfm6ConsignmentonwardmovementinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_ffm_6_consignmentonwardmovementinformation', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('AirportCodeOfNextDestination', 3)->nullable();
            $table->string('CarrierCode', 2)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('DayOfScheduleDeparture', 2)->nullable();
            $table->string('MonthOfScheduleDeparture', 3)->nullable();
            $table->string('MovementPriorityCode', 1)->nullable();
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
        Schema::dropIfExists('sending_ffm_6_consignmentonwardmovementinformation');
    }
}
