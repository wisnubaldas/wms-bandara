<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFsuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fsu', function (Blueprint $table) {
            $table->string('HostName', 3)->nullable();
            $table->char('AWD', 1)->nullable();
            $table->char('DIS', 1)->nullable();
            $table->char('DLV', 1)->nullable();
            $table->char('NFD', 1)->nullable();
            $table->char('RCF', 1)->nullable();
            $table->char('RCS', 1)->nullable();
            $table->char('RCT', 1)->nullable();
            $table->char('TFD', 1)->nullable();
            $table->char('FOH', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sending_fsu');
    }
}
