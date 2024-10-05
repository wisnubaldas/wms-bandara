<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFfm1MessageidentifierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_ffm_1_messageidentifier', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('HostName', 3)->index('_WA_Sys_HostName_11207638');
            $table->string('MessageKey', 80)->index('_WA_Sys_MessageKey_11207638');
            $table->string('MessageLineNo', 3)->nullable()->index('_WA_Sys_MessageLineNo_11207638');
            $table->string('StandardMessageIdentifier', 3)->nullable()->index('_WA_Sys_StandardMessageIdentifier_11207638');
            $table->string('MessageTypeVersionNumber', 3)->nullable()->index('_WA_Sys_MessageTypeVersionNumber_11207638');
            $table->longText('OriginalMessage')->nullable();
            $table->dateTime('DateRetrieveMessage')->nullable()->index('_WA_Sys_DateRetrieveMessage_11207638');
            $table->string('Manual', 1)->nullable()->index('_WA_Sys_Manual_11207638');
            $table->integer('MessageSent')->nullable()->index('_WA_Sys_MessageSent_11207638');
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
        Schema::dropIfExists('sending_ffm_1_messageidentifier');
    }
}
