<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwbAAccountinginformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb_a_accountinginformation', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('MessageKey', 80);
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('AccountingInformationIdentifier', 3)->nullable();
            $table->string('AccountingInformation', 34)->nullable();
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
        Schema::dropIfExists('sending_fwb_a_accountinginformation');
    }
}
