<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXmlEksporPebNpeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xml_ekspor_peb_npe', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('HAWB', 20)->nullable();
            $table->string('KD_KANTOR', 6)->nullable();
            $table->string('NO_DAFTAR', 6)->nullable();
            $table->string('TGL_DAFTAR', 10)->nullable();
            $table->string('NONPE', 20)->nullable();
            $table->string('TGLNPE', 10)->nullable();
            $table->string('NPWP_EKS', 25)->nullable();
            $table->string('NAMA_EKS', 100)->nullable();
            $table->string('FL_SEGEL', 1)->nullable();
            $table->string('JNS_KMS', 10)->nullable();
            $table->string('JML_KMS', 10)->nullable();
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
        Schema::dropIfExists('xml_ekspor_peb_npe');
    }
}
