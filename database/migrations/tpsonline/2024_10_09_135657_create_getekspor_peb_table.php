<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeteksporPebTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getekspor_peb', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('HAWB', 30)->nullable();
            $table->string('CAR', 26)->nullable();
            $table->string('NO_PEB', 6)->nullable();
            $table->string('TG_PEB', 8)->nullable();
            $table->string('NONPE', 30)->nullable();
            $table->string('TGLNPE', 8)->nullable();
            $table->string('KD_KPBC', 6)->nullable();
            $table->string('NPWP_EKS', 15)->nullable();
            $table->string('NAMA_EKS', 60)->nullable();
            $table->string('NPWP_PPJK', 15)->nullable();
            $table->string('NAMA_PPJK', 60)->nullable();
            $table->string('ALAMAT_PPJK', 70)->nullable();
            $table->string('JNS_ANGKUT', 1)->nullable();
            $table->string('NM_ANGKUT', 25)->nullable();
            $table->string('NO_VOY_FLIGHT', 20)->nullable();
            $table->string('JML_CONT', 8)->nullable();
            $table->string('JML_KMS', 8)->nullable();
            $table->string('BRUTO', 20)->nullable();
            $table->string('KD_KANTOR_MUAT', 6)->nullable();
            $table->string('TPS_TUJUAN', 4)->nullable();
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
        Schema::dropIfExists('getekspor_peb');
    }
}
