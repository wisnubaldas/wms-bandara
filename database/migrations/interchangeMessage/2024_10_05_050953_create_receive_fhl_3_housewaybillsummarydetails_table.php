<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveFhl3HousewaybillsummarydetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_fhl_3_housewaybillsummarydetails', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('HWBSerialNumber', 12)->nullable();
            $table->string('AirportCodeOfDeparture', 3)->nullable();
            $table->string('AirportCodeOfDestination', 3)->nullable();
            $table->string('NumberOfPieces', 4)->nullable();
            $table->string('WeightCode', 1)->nullable();
            $table->string('Weight', 7)->nullable();
            $table->string('SLAC', 5)->nullable();
            $table->string('ManifestDescriptionOfGoods', 15)->nullable();
            $table->string('SpecialHandlingCode1', 3)->nullable();
            $table->string('SpecialHandlingCode2', 3)->nullable();
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
        Schema::dropIfExists('receive_fhl_3_housewaybillsummarydetails');
    }
}
