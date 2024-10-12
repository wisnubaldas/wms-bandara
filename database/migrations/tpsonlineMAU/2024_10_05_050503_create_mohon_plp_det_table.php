<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMohonPlpDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mohon_plp_det', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->integer('id_mohon')->index('id_mohon');
            $table->string('kd_kms', 2)->nullable();
            $table->string('jns_kms', 30);
            $table->integer('jml_kms');
            $table->string('no_bl_awb', 30);
            $table->string('tgl_bl_Awb', 8)->comment('yyyyMMdd');
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
        Schema::dropIfExists('mohon_plp_det');
    }
}
