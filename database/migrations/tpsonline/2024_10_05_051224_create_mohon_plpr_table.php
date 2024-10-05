<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMohonPlprTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mohon_plpr', function (Blueprint $table) {
            $table->bigInteger('id_mohon')->primary();
            $table->string('kd_kantor', 6);
            $table->string('tipe_data', 1)->comment("1 :Baru, 2:Manual");
            $table->string('kd_tps_asal', 4);
            $table->string('ref_number', 50)->nullable();
            $table->string('no_surat', 50)->index('no_surat');
            $table->string('tgl_surat', 8)->comment("yyyyMMdd");
            $table->string('gudang_asal', 4);
            $table->string('kd_tps_tujuan', 4);
            $table->string('gudang_tujuan', 4);
            $table->integer('kd_alasan_plp');
            $table->integer('yor_asal');
            $table->integer('yor_tujuan');
            $table->string('call_sign', 5)->nullable();
            $table->string('nm_angkut', 25);
            $table->string('no_voy_flight', 20);
            $table->string('tgl_tiba', 8)->comment("yyyyMMdd");
            $table->string('no_bc11', 6);
            $table->string('tgl_bc11', 8)->comment("yyyyMMdd");
            $table->string('nm_pemohon', 30);
            $table->integer('flag_transfer')->default(0);
            $table->text('KD_RES')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mohon_plpr');
    }
}
