<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUnknownOutgoingmessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('unknown_outgoingmessages', function (Blueprint $table) {
            $table->dateTime('Date')->nullable();
            $table->dateTime('Time')->nullable();
            $table->string('Priority', 1)->nullable();
            $table->string('DoubleSig', 30)->nullable();
            $table->string('Recipients', 40)->nullable();
            $table->string('Subject', 70)->nullable();
            $table->mediumText('Messages')->nullable();
            $table->unsignedTinyInteger('SentStatus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('unknown_outgoingmessages');
    }
}
