<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFhl5HarmonisedtariffscheduleinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fhl_5_harmonisedtariffscheduleinformation', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('HWBSerialNumber', 12)->nullable();
            $table->string('HarmonisedCommodityCode1', 18)->nullable();
            $table->string('HarmonisedCommodityCode2', 18)->nullable();
            $table->string('HarmonisedCommodityCode3', 18)->nullable();
            $table->string('HarmonisedCommodityCode4', 18)->nullable();
            $table->string('HarmonisedCommodityCode5', 18)->nullable();
            $table->string('HarmonisedCommodityCode6', 18)->nullable();
            $table->string('HarmonisedCommodityCode7', 18)->nullable();
            $table->string('HarmonisedCommodityCode8', 18)->nullable();
            $table->string('HarmonisedCommodityCode9', 18)->nullable();
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
        Schema::dropIfExists('sending_fhl_5_harmonisedtariffscheduleinformation');
    }
}
