<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcRespone400Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bc_respone_400', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('NO_BARANG', 45)->nullable()->index('no_barang');
            $table->date('TGL_BLAWB')->nullable();
            $table->string('KD_RESPON', 10)->nullable();
            $table->string('KET_RESPON')->nullable();
            $table->dateTime('WK_REKAM')->nullable();
            $table->string('KD_KANTOR', 10)->nullable();
            $table->string('NDPBM')->nullable();
            $table->string('NIL_PAB_RP')->nullable();
            $table->string('NO_PIBK')->nullable();
            $table->date('TGL_PIBK')->nullable();
            $table->string('NO_SPBL')->nullable();
            $table->string('TGL_SPBL')->nullable();
            $table->integer('NO_SPPBMCP')->nullable();
            $table->date('TGL_SPPBMCP')->nullable();
            $table->string('KODE_BILLING')->nullable();
            $table->string('TOTAL_BILLING')->nullable();
            $table->date('TGL_JT_TEMPO')->nullable();
            $table->date('TGL_BILLING')->nullable();
            $table->string('KD_DOK_BILLING')->nullable();
            $table->string('NO_SPTNP')->nullable();
            $table->date('TGL_SPTNP')->nullable();
            $table->string('NO_SPPB')->nullable();
            $table->date('TGL_SPPB')->nullable();
            $table->dateTime('WK_RESPON')->nullable();
            $table->date('TGL_HOUSE_BLAWB')->nullable();
            $table->string('NO_HOUSE_BLAWB')->nullable();
            $table->string('NILAI_SPTNP')->nullable();
            $table->string('TOTAL_BM_VALUE', 15)->nullable();
            $table->string('TOTAL_PPH_VALUE', 15)->nullable();
            $table->string('TOTAL_PPN_VALUE', 15)->nullable();
            $table->string('TOTAL_PPNBM_VALUE', 15)->nullable();
            $table->string('TOTAL_BMTP_VALUE', 15)->nullable();
            $table->float('TOTAL_TAGIHAN')->nullable();
            $table->text('PDF')->nullable();
            $table->timestamps()->default('current_timestamp()');
            $table->integer('flag')->nullable();
            $table->bigInteger('id_manifest')->nullable();
            
            $table->unique(['NO_BARANG', 'KD_RESPON', 'WK_REKAM'], 'gabungan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bc_respone_400');
    }
}
