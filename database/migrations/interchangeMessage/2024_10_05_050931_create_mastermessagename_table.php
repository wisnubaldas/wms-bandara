<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMastermessagenameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mastermessagename', function (Blueprint $table) {
            $table->integer('Noid')->primary();
            $table->char('MessageCode', 6)->nullable();
            $table->char('VersionNo', 2)->nullable();
            $table->string('MessageName', 50)->nullable();
            $table->unsignedTinyInteger('inc_out')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mastermessagename');
    }
}
