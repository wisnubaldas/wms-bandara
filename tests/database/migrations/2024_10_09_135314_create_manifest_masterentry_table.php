<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestMasterentryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifest_masterentry', function (Blueprint $table) {
            $table->string('id_master', 30)->primary();
            $table->string('nomor_aju', 26)->nullable();
            $table->string('kd_kelompok_pos', 2)->nullable();
            $table->string('no_master_bl', 12)->nullable();
            $table->string('tgl_master_bl', 10)->nullable();
            $table->integer('jml_host_bl_awb')->nullable();
            $table->string('status_detail', 20)->nullable();
            $table->string('respon', 30)->nullable();
            $table->string('type_manifest', 15)->nullable();
            $table->boolean('fl_gate')->default(0);
            $table->string('token', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manifest_masterentry');
    }
}
