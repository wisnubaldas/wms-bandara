<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFsuAwdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fsu_awd', function (Blueprint $table) {
            $table->bigInteger('Noid')->index()->primary();
            $table->string('MessageKey', 11)->nullable();
            $table->string('HostName', 3)->nullable()->index('_WA_Sys_HostName_31B762FC');
            $table->string('AirlinePrefix', 3)->nullable()->index('_WA_Sys_AirlinePrefix_31B762FC');
            $table->string('AWBNumber', 8)->nullable()->index('_WA_Sys_AWBNumber_31B762FC');
            $table->string('OriginCode', 3)->nullable()->index('_WA_Sys_OriginCode_31B762FC');
            $table->string('DestinationCode', 3)->nullable()->index('_WA_Sys_DestinationCode_31B762FC');
            $table->string('PartialNumberOfPieces', 4)->nullable()->index('_WA_Sys_PartialNumberOfPieces_31B762FC');
            $table->string('Weight', 7)->nullable()->index('_WA_Sys_Weight_31B762FC');
            $table->string('TotalNumberOfPieces', 4)->nullable()->index('_WA_Sys_TotalNumberOfPieces_31B762FC');
            $table->string('DayOfDelivery', 2)->nullable()->index('_WA_Sys_DayOfDelivery_31B762FC');
            $table->string('MonthOfDelivery', 3)->nullable()->index('_WA_Sys_MonthOfDelivery_31B762FC');
            $table->string('ActualTimeOfGivenStatusEvent', 4)->nullable()->index('_WA_Sys_ActualTimeOfGivenStatusEvent_31B762FC');
            $table->string('AirportCodeOfDelivery', 3)->nullable()->index('_WA_Sys_AirportCodeOfDelivery_31B762FC');
            $table->string('ShipperName', 35)->nullable()->index('_WA_Sys_ShipperName_31B762FC');
            $table->integer('MessageSent')->nullable()->index('_WA_Sys_MessageSent_31B762FC');
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
        Schema::dropIfExists('sending_fsu_awd');
    }
}
