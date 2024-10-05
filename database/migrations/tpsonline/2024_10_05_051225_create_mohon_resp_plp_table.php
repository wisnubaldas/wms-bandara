<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMohonRespPlpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mohon_resp_plp', function (Blueprint $table) {
            $table->bigInteger('Noid')->primary();
            $table->string('kd_kantor', 6)->nullable();
            $table->string('kd_tps_asal', 4)->nullable();
            $table->string('kd_tps_tujuan', 4)->nullable();
            $table->string('ref_number', 30)->nullable();
            $table->string('gudang_asal', 4)->nullable();
            $table->string('gudang_tujuan', 4)->nullable();
            $table->string('no_plp', 30)->nullable();
            $table->string('tgl_plp', 8)->nullable()->comment("yyyyMMdd");
            $table->string('alasan_reject', 150)->nullable();
            $table->string('call_sign', 2)->nullable();
            $table->string('nm_angkut', 30)->nullable();
            $table->string('no_voy_flight', 5)->nullable();
            $table->string('tgl_tiba', 8)->nullable();
            $table->string('no_bc11', 6)->nullable();
            $table->string('tgl_bc11', 8)->nullable();
            $table->string('no_surat', 30)->nullable();
            $table->string('tgl_surat', 8)->nullable();
            $table->string('status', 45)->nullable();
            $table->dateTime('create_at')->nullable();
            $table->boolean('status_gatein')->default(0);
            $table->integer('kd_alasan_plp')->nullable();
            $table->string('nm_pemohon', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mohon_resp_plp');
    }
}
