<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestResponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifest_respon', function (Blueprint $table) {
            $table->string('id_respon', 30)->nullable();
            $table->string('nomor_aju', 26)->nullable();
            $table->string('kd_respon', 2)->nullable();
            $table->string('tgl_respon', 10)->nullable();
            $table->string('waktu_respon', 10)->nullable();
            $table->string('nomor_doc_respon', 6)->nullable();
            $table->string('tgl_doc_respon', 10)->nullable();
            $table->string('kode_kantor', 6)->nullable();
            $table->longText('pdf')->nullable();
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
        Schema::dropIfExists('manifest_respon');
    }
}
