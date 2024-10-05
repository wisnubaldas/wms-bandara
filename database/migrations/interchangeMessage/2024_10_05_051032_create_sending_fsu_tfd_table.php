<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFsuTfdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fsu_tfd', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('MessageKey', 11)->nullable();
            $table->string('HostName', 3)->nullable();
            $table->string('AirlinePrefix', 3)->nullable();
            $table->string('AWBNumber', 8)->nullable();
            $table->string('OriginCode', 3)->nullable();
            $table->string('DestinationCode', 3)->nullable();
            $table->string('PartialNumberOfPieces', 4)->nullable();
            $table->string('Weight', 7)->nullable();
            $table->string('TotalNumberOfPieces', 4)->nullable();
            $table->string('CarrierCodeOfReceivingCarrier', 2)->nullable();
            $table->string('DayOfTransfer', 2)->nullable();
            $table->string('MonthOfTransfer', 3)->nullable();
            $table->string('ActualTimeOfGivenStatusEvent', 4)->nullable();
            $table->string('AirportCodeOfTransfer', 3)->nullable();
            $table->string('TransferManifestNumber', 6)->nullable();
            $table->integer('MessageSent')->nullable();
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
        Schema::dropIfExists('sending_fsu_tfd');
    }
}
