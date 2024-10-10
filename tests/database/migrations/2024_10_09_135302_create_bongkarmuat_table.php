<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBongkarmuatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bongkarmuat', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('ref_number', 30)->nullable();
            $table->string('kd_gudang', 4)->nullable();
            $table->string('tgl_tiba', 8)->nullable();
            $table->string('nm_angkut', 30)->nullable();
            $table->string('no_voy_flight', 30)->nullable();
            $table->string('call_sign', 10)->nullable();
            $table->string('no_bc11', 6)->nullable();
            $table->string('tgl_bc11', 8)->nullable();
            $table->string('jml_bongkar_container', 5)->nullable();
            $table->string('jml_bongkar_kemasan', 5)->nullable();
            $table->string('jml_muat_container', 6)->nullable();
            $table->string('jml_muat_kemasan', 6)->nullable();
            $table->string('wk_aktual_kedatangan', 20)->nullable();
            $table->string('wk_aktual_keberangkatan', 20)->nullable();
            $table->string('fl_batal', 1)->nullable();
            $table->integer('flag_transfer')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bongkarmuat');
    }
}
