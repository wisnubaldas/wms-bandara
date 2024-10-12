<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusGateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('status_gate', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('gate', 20)->nullable()->comment('in-aei, out-aei');
            $table->string('mawb', 30)->nullable();
            $table->enum('status_cron', ['0', '9', '10'])->nullable()->comment("0 = ready, \r\n9 = proses cron selesai, \r\n10 = dari data yang 0 dihari kemarin (tdk akan diproses)");
            $table->integer('total_batch')->nullable()->comment('total batch di in = null (hanya untuk gateout)');
            $table->text('info_data')->nullable();
            $table->integer('data_diinsert')->nullable()->comment('data yg berhasil disimpan');
            $table->dateTime('date_created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('status_gate');
    }
}
