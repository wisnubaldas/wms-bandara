<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveFhl1StandardmessageindentificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_fhl_1_standardmessageindentification', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('HostName', 3)->nullable();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('StandardMessageIdentifier', 3)->nullable();
            $table->string('MessageTypeVersionNumber', 3)->nullable();
            $table->longText('OriginalMessage')->nullable();
            $table->dateTime('DateRetrieveMessage')->nullable();
            $table->string('Manual', 1)->nullable();
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
        Schema::dropIfExists('receive_fhl_1_standardmessageindentification');
    }
}
