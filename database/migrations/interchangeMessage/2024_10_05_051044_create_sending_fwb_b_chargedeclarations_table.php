<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwbBChargedeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb_b_chargedeclarations', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('MessageKey', 80);
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('CountryCode', 3)->nullable();
            $table->string('ChargeCode', 2)->nullable();
            $table->string('WeightValuation', 1)->nullable();
            $table->string('OtherCharges', 1)->nullable();
            $table->string('DeclaredValueForCarriage', 12)->nullable();
            $table->string('DeclaredValueForCustoms', 12)->nullable();
            $table->string('AmountOfInsurance', 11)->nullable();
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
        Schema::dropIfExists('sending_fwb_b_chargedeclarations');
    }
}
