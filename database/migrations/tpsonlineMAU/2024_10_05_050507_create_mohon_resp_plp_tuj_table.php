<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMohonRespPlpTujTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mohon_resp_plp_tuj', function (Blueprint $table) {
            $table->bigInteger('Noid')->primary();
            $table->string('kd_kantor', 10)->nullable();
            $table->string('kd_tps_asal', 10)->nullable();
            $table->string('kd_tps_tujuan', 10)->nullable();
            $table->string('ref_number', 30)->nullable();
            $table->string('gudang_asal', 10)->nullable();
            $table->string('gudang_tujuan', 10)->nullable();
            $table->string('no_plp', 30)->nullable();
            $table->string('tgl_plp', 20)->nullable()->comment("yyyyMMdd");
            $table->string('alasan_reject', 30)->nullable();
            $table->string('call_sign', 30)->nullable();
            $table->string('nm_angkut', 40)->nullable();
            $table->string('no_voy_flight', 20)->nullable();
            $table->string('tgl_tiba', 8)->nullable()->comment("yyyyMMdd");
            $table->string('no_surat', 40)->nullable();
            $table->string('tgl_surat', 8)->nullable()->comment("yyyyMMdd");
            $table->string('no_bc11', 6)->nullable();
            $table->string('tgl_bc11', 8)->nullable()->index('tgl_bc11')->comment("yyyyMMdd");
            $table->dateTime('create_at')->nullable();
            $table->dateTime('update_at')->nullable();
            $table->boolean('status_gatein')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mohon_resp_plp_tuj');
    }
}
