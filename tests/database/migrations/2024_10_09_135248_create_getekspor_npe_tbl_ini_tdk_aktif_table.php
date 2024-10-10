<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeteksporNpeTblIniTdkAktifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getekspor_npe_tbl_ini_tdk_aktif', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('HAWB', 15)->nullable();
            $table->string('KD_KANTOR', 10)->nullable();
            $table->string('NO_DAFTAR', 50)->nullable();
            $table->string('TGL_DAFTAR', 10)->nullable();
            $table->string('NONPE', 50)->nullable();
            $table->string('TGLNPE', 10)->nullable();
            $table->string('NPWP_EKS', 50)->nullable();
            $table->string('NAMA_EKS', 100)->nullable();
            $table->string('FL_SEGEL', 2)->nullable();
            $table->bigInteger('xml_code')->nullable();
            $table->timestamp('created_at')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('getekspor_npe_tbl_ini_tdk_aktif');
    }
}
