<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMohonRespPlpDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mohon_resp_plp_det', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('jns_kms', 30)->nullable();
            $table->integer('jml_kms')->nullable();
            $table->string('no_bl_awb', 30)->nullable();
            $table->string('tgl_bl_awb', 8)->nullable()->comment("yyyyMMdd");
            $table->string('fl_setuju', 1)->nullable()->comment("Y/T");
            $table->string('id_header', 45);
            $table->string('berat_manual', 10)->default('0');
            $table->string('kode_pjt', 5)->nullable();
            $table->string('no_pos_bc11', 6)->nullable();
            $table->string('consignee', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mohon_resp_plp_det');
    }
}
