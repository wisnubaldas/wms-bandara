<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwb4RoutingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb_4_routing', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80);
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('AirportCodeDestination', 3)->nullable();
            $table->string('CarrierCodeDestination', 2)->nullable();
            $table->string('AirportCodeOnwardDestination', 3)->nullable();
            $table->string('CarrierCodeOnwardDestination', 2)->nullable();
            $table->string('AirportCodeDestination2', 3)->nullable();
            $table->string('CarrierCodeDestination2', 2)->nullable();
            $table->string('AirportCodeOnwardDestination2', 3)->nullable();
            $table->string('CarrierCodeOnwardDestination2', 2)->nullable();
            $table->string('AirportCodeDestination3', 3)->nullable();
            $table->string('CarrierCodeDestination3', 2)->nullable();
            $table->string('AirportCodeOnwardDestination3', 3)->nullable();
            $table->string('CarrierCodeOnwardDestination3', 2)->nullable();
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
        Schema::dropIfExists('sending_fwb_4_routing');
    }
}
