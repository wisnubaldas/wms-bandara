<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFsuDisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fsu_dis', function (Blueprint $table) {
            $table->bigInteger('Noid')->index()->primary();
            $table->string('MessageKey', 11)->nullable();
            $table->string('HostName', 3)->nullable()->index('_WA_Sys_HostName_2B0A656D');
            $table->string('AirlinePrefix', 3)->nullable()->index('_WA_Sys_AirlinePrefix_2B0A656D');
            $table->string('AWBNumber', 8)->nullable()->index('_WA_Sys_AWBNumber_2B0A656D');
            $table->string('OriginCode', 3)->nullable()->index('_WA_Sys_OriginCode_2B0A656D');
            $table->string('DestinationCode', 3)->nullable()->index('_WA_Sys_DestinationCode_2B0A656D');
            $table->string('PartialNumberOfPieces', 4)->nullable()->index('_WA_Sys_PartialNumberOfPieces_2B0A656D');
            $table->string('Weight', 7)->nullable()->index('_WA_Sys_Weight_2B0A656D');
            $table->string('TotalNumberOfPieces', 4)->nullable()->index('_WA_Sys_TotalNumberOfPieces_2B0A656D');
            $table->string('CarrierCode', 2)->nullable()->index('_WA_Sys_CarrierCode_2B0A656D');
            $table->string('FlightNumber', 4)->nullable()->index('_WA_Sys_FlightNumber_2B0A656D');
            $table->string('DayOfDiscrepancy', 2)->nullable()->index('_WA_Sys_DayOfDiscrepancy_2B0A656D');
            $table->string('MonthOfDiscrepancy', 3)->nullable()->index('_WA_Sys_MonthOfDiscrepancy_2B0A656D');
            $table->string('ActualTimeOfGivenStatusEvent', 4)->nullable()->index('_WA_Sys_ActualTimeOfGivenStatusEvent_2B0A656D');
            $table->string('AirportCodeOfDiscrepancy', 3)->nullable()->index('_WA_Sys_AirportCodeOfDiscrepancy_2B0A656D');
            $table->string('CodeOfDiscrepancy', 4)->nullable()->index('_WA_Sys_CodeOfDiscrepancy_2B0A656D');
            $table->string('DiscrepancyNumberOfPieces', 4)->nullable()->index('_WA_Sys_DiscrepancyNumberOfPieces_2B0A656D');
            $table->string('DiscrepancyOfWeight', 7)->nullable()->index('_WA_Sys_DiscrepancyOfWeight_2B0A656D');
            $table->string('OtherServiceInformation1', 65)->nullable()->index('_WA_Sys_OtherServiceInformation1_2B0A656D');
            $table->string('OtherServiceInformation2', 65)->nullable()->index('_WA_Sys_OtherServiceInformation2_2B0A656D');
            $table->string('OtherServiceInformation3', 65)->nullable()->index('_WA_Sys_OtherServiceInformation3_2B0A656D');
            $table->integer('MessageSent')->nullable()->index('_WA_Sys_MessageSent_2B0A656D');
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
        Schema::dropIfExists('sending_fsu_dis');
    }
}
