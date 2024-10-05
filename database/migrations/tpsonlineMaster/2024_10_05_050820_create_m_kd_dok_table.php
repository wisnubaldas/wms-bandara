<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKdDokTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kd_dok', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('nilai');
            $table->string('nama', 50);
            $table->string('keterangan', 50);
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
        Schema::dropIfExists('m_kd_dok');
    }
}
