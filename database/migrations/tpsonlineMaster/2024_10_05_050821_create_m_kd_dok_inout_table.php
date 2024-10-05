<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKdDokInoutTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kd_dok_inout', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('nilai')->nullable();
            $table->string('nama', 100)->nullable();
            $table->string('keterangan', 50)->nullable();
            $table->enum('sudah_dipisah', ['T', 'Y'])->default('T');
            $table->timestamp('create_at')->nullable()->default('current_timestamp()');
            $table->string('nama_pendek')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_kd_dok_inout');
    }
}
