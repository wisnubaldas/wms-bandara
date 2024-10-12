<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwbHCarrierexecutionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb_h_carrierexecution', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('MessageKey', 80);
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('DayIssue', 2)->nullable();
            $table->string('MonthIssue', 3)->nullable();
            $table->string('YearIssue', 2)->nullable();
            $table->string('PlaceIssue', 17)->nullable();
            $table->string('AirportCode', 3)->nullable();
            $table->string('Signature', 20)->nullable();
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
        Schema::dropIfExists('sending_fwb_h_carrierexecution');
    }
}
