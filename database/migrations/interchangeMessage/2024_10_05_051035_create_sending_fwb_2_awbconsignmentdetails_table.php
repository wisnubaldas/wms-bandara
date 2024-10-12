<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwb2AwbconsignmentdetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb_2_awbconsignmentdetails', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('MessageKey', 80);
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('AirlinePrefix', 3)->nullable();
            $table->string('AWBNumber', 8)->nullable();
            $table->string('OriginCode', 3)->nullable();
            $table->string('DestinationCode', 3)->nullable();
            $table->string('ShipmentDescriptionCode', 1)->nullable();
            $table->string('NumberOfPieces', 4)->nullable();
            $table->string('WeightCode', 1)->nullable();
            $table->string('Weight', 7)->nullable();
            $table->string('VolumeCode', 2)->nullable();
            $table->string('VolumeAmount', 9)->nullable();
            $table->string('DensityIndicator', 2)->nullable();
            $table->string('DensityGroup', 2)->nullable();
            $table->timestamp('created_at')->default('current_timestamp()');

            $table->primary(['id', 'MessageKey']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sending_fwb_2_awbconsignmentdetails');
    }
}
