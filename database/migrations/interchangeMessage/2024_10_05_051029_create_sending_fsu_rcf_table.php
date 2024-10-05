<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFsuRcfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fsu_rcf', function (Blueprint $table) {
            $table->bigInteger('Noid')->index()->primary();
            $table->string('MessageKey', 11)->nullable();
            $table->string('HostName', 3)->nullable()->index('_WA_Sys_HostName_2645B050');
            $table->string('AirlinePrefix', 3)->nullable()->index('_WA_Sys_AirlinePrefix_2645B050');
            $table->string('AWBNumber', 8)->nullable()->index('_WA_Sys_AWBNumber_2645B050');
            $table->string('OriginCode', 3)->nullable()->index('_WA_Sys_OriginCode_2645B050');
            $table->string('DestinationCode', 3)->nullable()->index('_WA_Sys_DestinationCode_2645B050');
            $table->string('PartialNumberOfPieces', 4)->nullable()->index('_WA_Sys_PartialNumberOfPieces_2645B050');
            $table->string('Weight', 7)->nullable()->index('_WA_Sys_Weight_2645B050');
            $table->string('TotalNumberOfPieces', 4)->nullable()->index('_WA_Sys_TotalNumberOfPieces_2645B050');
            $table->string('CarrierCode', 2)->nullable()->index('_WA_Sys_CarrierCode_2645B050');
            $table->string('FlightNumber', 4)->nullable()->index('_WA_Sys_FlightNumber_2645B050');
            $table->string('DayOfArrival', 2)->nullable()->index('_WA_Sys_DayOfArrival_2645B050');
            $table->string('MonthOfArrival', 3)->nullable()->index('_WA_Sys_MonthOfArrival_2645B050');
            $table->string('ActualTimeOfGivenStatusEvent', 4)->nullable()->index('_WA_Sys_ActualTimeOfGivenStatusEvent_2645B050');
            $table->string('AirportCodeOfArrival', 3)->nullable()->index('_WA_Sys_AirportCodeOfArrival_2645B050');
            $table->string('TimeOfDeparture', 4)->nullable()->index('_WA_Sys_TimeOfDeparture_2645B050');
            $table->string('TimeOfArrival', 4)->nullable()->index('_WA_Sys_TimeOfArrival_2645B050');
            $table->integer('MessageSent')->nullable()->index('_WA_Sys_MessageSent_2645B050');
            $table->timestamp('create_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sending_fsu_rcf');
    }
}
