<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeteksporNpeKmsTblIniTdkAktifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getekspor_npe_kms_tbl_ini_tdk_aktif', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->bigInteger('id_header')->nullable();
            $table->string('SERI_CONT', 30)->nullable();
            $table->string('NO_CONT', 30)->nullable();
            $table->integer('SIZE')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('getekspor_npe_kms_tbl_ini_tdk_aktif');
    }
}
