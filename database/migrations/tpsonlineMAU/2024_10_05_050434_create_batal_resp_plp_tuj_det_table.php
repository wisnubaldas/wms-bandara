<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatalRespPlpTujDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batal_resp_plp_tuj_det', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->integer('id_header')->nullable();
            $table->string('jns_kms', 30)->nullable();
            $table->integer('jml_kms')->nullable();
            $table->string('no_bl_awb', 30)->nullable();
            $table->string('tgl_bl_awb', 8)->nullable()->comment('yyyyMMdd');
            $table->string('fl_setuju', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batal_resp_plp_tuj_det');
    }
}
