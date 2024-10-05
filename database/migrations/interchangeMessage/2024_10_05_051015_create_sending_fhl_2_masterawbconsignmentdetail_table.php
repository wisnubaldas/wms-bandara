<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFhl2MasterawbconsignmentdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fhl_2_masterawbconsignmentdetail', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('AirlinePrefix', 3)->nullable();
            $table->string('AWBNumber', 8)->nullable();
            $table->string('OriginCode', 3)->nullable();
            $table->string('DestinationCode', 3)->nullable();
            $table->string('ShipmentDescriptionCode', 1)->nullable();
            $table->string('NumberOfPieces', 4)->nullable();
            $table->string('WeightCode', 1)->nullable();
            $table->string('Weight', 7)->nullable();
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
        Schema::dropIfExists('sending_fhl_2_masterawbconsignmentdetail');
    }
}
