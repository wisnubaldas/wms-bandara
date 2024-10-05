<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwb7AgentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb_7_agent', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('MessageKey', 80);
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('AccountNumber', 14)->nullable();
            $table->string('IATANumericCode', 7)->nullable();
            $table->string('IATACASSAddress', 4)->nullable();
            $table->string('ParticipantIdentifier', 3)->nullable();
            $table->string('Name', 35)->nullable();
            $table->string('Place', 17)->nullable();
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
        Schema::dropIfExists('sending_fwb_7_agent');
    }
}
