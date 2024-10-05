<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetImpLongtrackDevTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_imp_longtrack_dev', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->string('kd_tps', 10)->nullable();
            $table->string('kd_gudang', 20)->nullable();
            $table->string('no_bl_awb', 100)->nullable();
            $table->string('longtrack_number', 50)->nullable();
            $table->boolean('flag_hadir')->default(0);
            $table->string('tgl_hadir', 10)->nullable();
            $table->string('wk_hadir', 8)->nullable();
            $table->boolean('flag_keluar')->default(0);
            $table->string('tgl_keluar', 10)->nullable();
            $table->string('wk_keluar', 8)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('get_imp_longtrack_dev');
    }
}
