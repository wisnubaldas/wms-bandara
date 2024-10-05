<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServiceyorTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('serviceyor', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('ref_number', 30)->nullable();
            $table->string('kd_tps', 4)->nullable();
            $table->string('kd_gudang', 4)->nullable();
            $table->string('tgl_laporan', 8)->nullable();
            $table->string('imp_yor', 4)->nullable();
            $table->string('imp_kap_lapangan', 10)->nullable();
            $table->string('imp_kap_gudang', 10)->nullable();
            $table->string('imp_total_conf', 10)->nullable();
            $table->string('imp_total_kms', 10)->nullable();
            $table->string('imp_jml_cont20f', 10)->nullable();
            $table->string('imp_jml_cont40f', 10)->nullable();
            $table->string('imp_jml_cont45f', 10)->nullable();
            $table->string('eks_yor', 10)->nullable();
            $table->string('eks_kap_lapangan', 10)->nullable();
            $table->string('eks_kap_gudang', 10)->nullable();
            $table->string('eks_total_conf', 10)->nullable();
            $table->string('eks_total_kms', 10)->nullable();
            $table->string('eks_jml_cont20f', 10)->nullable();
            $table->string('eks_jml_cont40f', 10)->nullable();
            $table->string('eks_jml_cont45f', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('serviceyor');
    }
}
