<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtTpsGateJabatanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_tps_gate_jabatan', function (Blueprint $table) {
            $table->integer('_id')->index('_id');
            $table->integer('_id_m_tps_gate');
            $table->integer('_id_m_jabatan');
            $table->string('kd_gate_jabatan', 10)->nullable();
            $table->string('ket_gate_jabatan', 50)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mt_tps_gate_jabatan');
    }
}
