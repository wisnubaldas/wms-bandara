<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwbEPrepaidchargesummaryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb_e_prepaidchargesummary', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('MessageKey', 80);
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('ChargeIdentifierWT', 2)->nullable();
            $table->string('ChargeAmountWT', 12)->nullable();
            $table->string('ChargeIdentifierVC', 2)->nullable();
            $table->string('ChargeAmountVC', 12)->nullable();
            $table->string('ChargeIdentifierTX', 2)->nullable();
            $table->string('ChargeAmountTX', 12)->nullable();
            $table->string('ChargeIdentifierOA', 2)->nullable();
            $table->string('ChargeAmountOA', 12)->nullable();
            $table->string('ChargeIdentifierOC', 2)->nullable();
            $table->string('ChargeAmountOC', 12)->nullable();
            $table->string('ChargeIdentifierCT', 2)->nullable();
            $table->string('ChargeAmountCT', 12)->nullable();
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
        Schema::dropIfExists('sending_fwb_e_prepaidchargesummary');
    }
}
