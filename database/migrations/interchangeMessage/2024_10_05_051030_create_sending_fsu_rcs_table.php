<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFsuRcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fsu_rcs', function (Blueprint $table) {
            $table->bigInteger('Noid')->index()->primary();
            $table->string('MessageKey', 11)->nullable();
            $table->string('HostName', 3)->nullable()->index('_WA_Sys_HostName_2739D489');
            $table->string('AirlinePrefix', 3)->nullable()->index('_WA_Sys_AirlinePrefix_2739D489');
            $table->string('AWBNumber', 8)->nullable()->index('_WA_Sys_AWBNumber_2739D489');
            $table->string('OriginCode', 3)->nullable()->index('_WA_Sys_OriginCode_2739D489');
            $table->string('DestinationCode', 3)->nullable()->index('_WA_Sys_DestinationCode_2739D489');
            $table->string('PartialNumberOfPieces', 4)->nullable()->index('_WA_Sys_PartialNumberOfPieces_2739D489');
            $table->string('Weight', 7)->nullable()->index('_WA_Sys_Weight_2739D489');
            $table->string('TotalNumberOfPieces', 4)->nullable()->index('_WA_Sys_TotalNumberOfPieces_2739D489');
            $table->string('DayOfReceipt', 2)->nullable()->index('_WA_Sys_DayOfReceipt_2739D489');
            $table->string('MonthOfReceipt', 3)->nullable()->index('_WA_Sys_MonthOfReceipt_2739D489');
            $table->string('ActualTimeOfGivenStatusEvent', 4)->nullable()->index('_WA_Sys_ActualTimeOfGivenStatusEvent_2739D489');
            $table->string('AirportCodeOfReceipt', 3)->nullable()->index('_WA_Sys_AirportCodeOfReceipt_2739D489');
            $table->string('ShipperName', 35)->nullable()->index('_WA_Sys_ShipperName_2739D489');
            $table->integer('MessageSent')->nullable()->index('_WA_Sys_MessageSent_2739D489');
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
        Schema::dropIfExists('sending_fsu_rcs');
    }
}
