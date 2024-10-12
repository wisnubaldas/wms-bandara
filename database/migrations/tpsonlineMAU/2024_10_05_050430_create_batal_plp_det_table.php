<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBatalPlpDetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batal_plp_det', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->integer('id_batal');
            $table->string('jns_kms', 30);
            $table->integer('jml_kms');
            $table->string('no_bl_awb', 30);
            $table->string('tgl_bl_awb', 8)->comment('yyyyMMdd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batal_plp_det');
    }
}
