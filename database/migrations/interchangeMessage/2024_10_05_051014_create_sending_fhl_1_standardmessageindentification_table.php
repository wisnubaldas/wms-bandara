<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFhl1StandardmessageindentificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fhl_1_standardmessageindentification', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('HostName', 3)->nullable()->index('_WA_Sys_HostName_74AE54BC');
            $table->string('MessageKey', 80)->index('_WA_Sys_MessageKey_74AE54BC');
            $table->string('MessageLineNo', 3)->nullable()->index('_WA_Sys_MessageLineNo_74AE54BC');
            $table->string('StandardMessageIdentifier', 3)->nullable()->index('_WA_Sys_StandardMessageIdentifier_74AE54BC');
            $table->string('MessageTypeVersionNumber', 3)->nullable()->index('_WA_Sys_MessageTypeVersionNumber_74AE54BC');
            $table->text('OriginalMessage')->nullable();
            $table->dateTime('DateRetrieveMessage')->nullable()->index('_WA_Sys_DateRetrieveMessage_74AE54BC');
            $table->string('Manual', 1)->default('0')->index('_WA_Sys_Manual_74AE54BC');
            $table->integer('MessageSent')->default(0)->index('_WA_Sys_MessageSent_74AE54BC');
            $table->timestamp('create_at')->default('current_timestamp()');

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
        Schema::dropIfExists('sending_fhl_1_standardmessageindentification');
    }
}
