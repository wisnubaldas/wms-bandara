<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatalRespPlpTujTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batal_resp_plp_tuj', function (Blueprint $table) {
            $table->bigInteger('Noid')->primary();
            $table->string('kd_kantor', 6)->nullable();
            $table->string('kd_tps_asal', 4)->nullable();
            $table->string('kd_tps_tujuan', 4)->nullable();
            $table->string('ref_number', 50)->nullable();
            $table->string('gudang_asal', 4)->nullable();
            $table->string('gudang_tujuan', 4)->nullable();
            $table->string('no_plp', 8)->nullable();
            $table->string('tgl_plp', 8)->nullable()->comment('yyyyMMdd');
            $table->string('no_batal_plp', 30)->nullable();
            $table->string('tgl_batal_plp', 8)->nullable()->comment('yyyyMMdd');
            $table->string('alasan_batal', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batal_resp_plp_tuj');
    }
}
