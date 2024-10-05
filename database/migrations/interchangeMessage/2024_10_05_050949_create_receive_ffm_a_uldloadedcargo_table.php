<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveFfmAUldloadedcargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_ffm_a_uldloadedcargo', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('ULDType', 3)->nullable();
            $table->string('ULDSerialNumber', 5)->nullable();
            $table->string('ULDOwnerCode', 2)->nullable();
            $table->string('ULDLoadingIndicator', 1)->nullable();
            $table->string('ULDRemarks', 53)->nullable();
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
        Schema::dropIfExists('receive_ffm_a_uldloadedcargo');
    }
}
