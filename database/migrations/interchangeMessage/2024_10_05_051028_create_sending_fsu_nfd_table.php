<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFsuNfdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fsu_nfd', function (Blueprint $table) {
            $table->bigInteger('Noid')->index()->primary();
            $table->string('MessageKey', 11)->nullable();
            $table->string('HostName', 3)->nullable()->index('_WA_Sys_HostName_2A164134');
            $table->string('AirlinePrefix', 3)->nullable()->index('_WA_Sys_AirlinePrefix_2A164134');
            $table->string('AWBNumber', 8)->nullable()->index('_WA_Sys_AWBNumber_2A164134');
            $table->string('OriginCode', 3)->nullable()->index('_WA_Sys_OriginCode_2A164134');
            $table->string('DestinationCode', 3)->nullable()->index('_WA_Sys_DestinationCode_2A164134');
            $table->string('PartialNumberOfPieces', 4)->nullable()->index('_WA_Sys_PartialNumberOfPieces_2A164134');
            $table->string('Weight', 7)->nullable()->index('_WA_Sys_Weight_2A164134');
            $table->string('TotalNumberOfPieces', 4)->nullable()->index('_WA_Sys_TotalNumberOfPieces_2A164134');
            $table->string('DayOfNotification', 2)->nullable()->index('_WA_Sys_DayOfNotification_2A164134');
            $table->string('MonthOfNotification', 3)->nullable()->index('_WA_Sys_MonthOfNotification_2A164134');
            $table->string('ActualTimeOfGivenStatusEvent', 4)->nullable()->index('_WA_Sys_ActualTimeOfGivenStatusEvent_2A164134');
            $table->string('AirportCodeOfNotification', 3)->nullable()->index('_WA_Sys_AirportCodeOfNotification_2A164134');
            $table->string('ShipperName', 35)->nullable()->index('_WA_Sys_ShipperName_2A164134');
            $table->integer('MessageSent')->nullable()->index('_WA_Sys_MessageSent_2A164134');
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
        Schema::dropIfExists('sending_fsu_nfd');
    }
}
