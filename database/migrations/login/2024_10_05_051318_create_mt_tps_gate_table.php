<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtTpsGateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_tps_gate', function (Blueprint $table) {
            $table->increments('_id');
            $table->integer('_id_m_tps');
            $table->string('kd_tps', 4)->nullable()->index('kd_tps');
            $table->string('kd_gate', 4)->nullable()->index('kd_gudang');
            $table->string('nama_gate', 70)->nullable();
            $table->string('kd_kbpc', 6)->nullable();
            $table->integer('asAsal')->default(1);
            $table->integer('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mt_tps_gate');
    }
}
