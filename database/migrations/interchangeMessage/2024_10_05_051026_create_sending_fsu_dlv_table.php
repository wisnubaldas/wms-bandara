<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFsuDlvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fsu_dlv', function (Blueprint $table) {
            $table->bigInteger('Noid')->index()->primary();
            $table->string('MessageKey', 11)->nullable();
            $table->string('HostName', 3)->nullable()->index('_WA_Sys_HostName_29221CFB');
            $table->string('AirlinePrefix', 3)->nullable()->index('_WA_Sys_AirlinePrefix_29221CFB');
            $table->string('AWBNumber', 8)->nullable()->index('_WA_Sys_AWBNumber_29221CFB');
            $table->string('OriginCode', 3)->nullable()->index('_WA_Sys_OriginCode_29221CFB');
            $table->string('DestinationCode', 3)->nullable()->index('_WA_Sys_DestinationCode_29221CFB');
            $table->string('PartialNumberOfPieces', 4)->nullable()->index('_WA_Sys_PartialNumberOfPieces_29221CFB');
            $table->string('Weight', 7)->nullable()->index('_WA_Sys_Weight_29221CFB');
            $table->string('TotalNumberOfPieces', 4)->nullable()->index('_WA_Sys_TotalNumberOfPieces_29221CFB');
            $table->string('DayOfDelivery', 2)->nullable()->index('_WA_Sys_DayOfDelivery_29221CFB');
            $table->string('MonthOfDelivery', 3)->nullable()->index('_WA_Sys_MonthOfDelivery_29221CFB');
            $table->string('ActualTimeOfGivenStatusEvent', 4)->nullable()->index('_WA_Sys_ActualTimeOfGivenStatusEvent_29221CFB');
            $table->string('AirportCodeOfDelivery', 3)->nullable()->index('_WA_Sys_AirportCodeOfDelivery_29221CFB');
            $table->string('ShipperName', 35)->nullable()->index('_WA_Sys_ShipperName_29221CFB');
            $table->integer('MessageSent')->nullable()->index('_WA_Sys_MessageSent_29221CFB');
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
        Schema::dropIfExists('sending_fsu_dlv');
    }
}
