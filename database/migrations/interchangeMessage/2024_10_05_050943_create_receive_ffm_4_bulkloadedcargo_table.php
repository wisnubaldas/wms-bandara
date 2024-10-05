<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveFfm4BulkloadedcargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_ffm_4_bulkloadedcargo', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('Point_Of_Unloading', 3)->nullable();
            $table->string('ULD_Description', 80)->nullable();
            $table->string('AirlinePrefix', 3)->nullable();
            $table->string('AWBSerialNumber', 8)->nullable();
            $table->string('AirportCityCodeOfOrigin', 3)->nullable();
            $table->string('AirportCityCodeOfDestination', 3)->nullable();
            $table->string('ShipmentDescriptionCodeOfQuantityDetail', 1)->nullable();
            $table->string('NumberOfPiecesOfQuantityDetail', 4)->nullable();
            $table->string('WeightCode', 1)->nullable();
            $table->string('Weight', 7)->nullable();
            $table->string('VolumeCode', 2)->nullable();
            $table->string('VolumeAmount', 9)->nullable();
            $table->string('DensityIndicator', 2)->nullable();
            $table->string('DensityGroup', 3)->nullable();
            $table->string('ShipmentDescriptionCodeOfTotalConsignmentPieces', 1)->nullable();
            $table->string('NumberOfPiecesOfTotalConsignmentPieces', 4)->nullable();
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
        Schema::dropIfExists('receive_ffm_4_bulkloadedcargo');
    }
}
