<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMohonRespPlpTujDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mohon_resp_plp_tuj_det', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->integer('id_header')->nullable()->index('id_header');
            $table->string('jns_kms', 30)->nullable();
            $table->integer('jml_kms')->nullable();
            $table->string('no_bl_awb', 30)->nullable()->index('no_bl_awb');
            $table->string('tgl_bl_awb', 8)->nullable()->comment("yyyyMMdd");
            $table->string('no_pos_bc11', 6)->nullable();
            $table->string('consignee', 50)->nullable();
            $table->string('fl_setuju', 1)->nullable()->index('fl_setuju');
            $table->integer('berat_manual')->nullable();
            $table->string('kode_pjt', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mohon_resp_plp_tuj_det');
    }
}
