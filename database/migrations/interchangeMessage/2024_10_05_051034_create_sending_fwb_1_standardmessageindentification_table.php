<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwb1StandardmessageindentificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb_1_standardmessageindentification', function (Blueprint $table) {
            $table->bigInteger('Noid')->index()->primary();
            $table->string('HostName', 3)->nullable()->index('_WA_Sys_HostName_05AEC38C');
            $table->string('MessageKey', 80)->index('_WA_Sys_MessageKey_05AEC38C');
            $table->string('MessageLineNo', 3)->nullable()->index('_WA_Sys_MessageLineNo_05AEC38C');
            $table->string('StandardMessageIdentifier', 3)->nullable()->index('_WA_Sys_StandardMessageIdentifier_05AEC38C');
            $table->string('MessageTypeVersionNumber', 3)->nullable()->index('_WA_Sys_MessageTypeVersionNumber_05AEC38C');
            $table->longText('OriginalMessage')->nullable();
            $table->dateTime('DateRetrieveMessage')->nullable()->index('_WA_Sys_DateRetrieveMessage_05AEC38C');
            $table->string('Manual', 1)->nullable()->index('_WA_Sys_Manual_05AEC38C');
            $table->integer('MessageSent')->nullable()->index('_WA_Sys_MessageSent_05AEC38C');
            $table->string('EmployeeNumber', 10)->nullable();
            $table->timestamp('create_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sending_fwb_1_standardmessageindentification');
    }
}
