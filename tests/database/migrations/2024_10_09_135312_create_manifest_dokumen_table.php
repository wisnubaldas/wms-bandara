<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestDokumenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifest_dokumen', function (Blueprint $table) {
            $table->string('id_dokumen', 30)->primary();
            $table->string('id_detail', 30)->nullable();
            $table->string('kode_dokumen', 12)->nullable();
            $table->string('nomor_dokumen', 30)->nullable();
            $table->string('tgl_dokumen', 10)->nullable();
            $table->string('kd_kantor', 6)->nullable();
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
        Schema::dropIfExists('manifest_dokumen');
    }
}
