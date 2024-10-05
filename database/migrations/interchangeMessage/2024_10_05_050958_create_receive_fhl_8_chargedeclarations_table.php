<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveFhl8ChargedeclarationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_fhl_8_chargedeclarations', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('CountryCode', 3)->nullable();
            $table->string('WeightValuation', 1)->nullable();
            $table->string('OtherCharges', 1)->nullable();
            $table->string('DeclaredValueForCarriage', 12)->nullable();
            $table->string('NoValueDeclared', 3)->nullable();
            $table->string('DeclaredValueForCustoms', 12)->nullable();
            $table->string('NoCustomsValue', 3)->nullable();
            $table->string('AmountOfInsurance', 11)->nullable();
            $table->string('NoValue', 3)->nullable();
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
        Schema::dropIfExists('receive_fhl_8_chargedeclarations');
    }
}
