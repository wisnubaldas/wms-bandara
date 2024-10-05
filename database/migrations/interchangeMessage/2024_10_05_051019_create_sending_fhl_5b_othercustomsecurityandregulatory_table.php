<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFhl5bOthercustomsecurityandregulatoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fhl_5b_othercustomsecurityandregulatory', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('HWBSerialNumber', 12)->nullable();
            $table->string('ISOCountryCode', 3)->nullable();
            $table->string('InformationIdentifier', 3)->nullable();
            $table->string('CustomsSecurityAndRegulatoryControlInformationIdentifier', 2)->nullable();
            $table->string('SupplementaryCustomsSecurityAndRegulatortyCtrlInfo', 35)->nullable();
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
        Schema::dropIfExists('sending_fhl_5b_othercustomsecurityandregulatory');
    }
}
