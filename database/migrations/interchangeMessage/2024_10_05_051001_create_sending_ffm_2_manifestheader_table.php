<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFfm2ManifestheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_ffm_2_manifestheader', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80);
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('MessageSequenceNumber', 2)->nullable();
            $table->string('CarrierCode', 2)->nullable();
            $table->string('FlightNumber', 4)->nullable();
            $table->string('DayOfScheduleDeparture', 2)->nullable();
            $table->string('MonthOfScheduleDeparture', 3)->nullable();
            $table->string('AirportCodeOfLoading', 3)->nullable();
            $table->string('AircraftRegistration', 10)->nullable();
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
        Schema::dropIfExists('sending_ffm_2_manifestheader');
    }
}
