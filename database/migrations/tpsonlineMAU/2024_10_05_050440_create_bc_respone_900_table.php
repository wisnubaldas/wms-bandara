<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcRespone900Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bc_respone_900', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('NO_BARANG', 20)->nullable()->index('NO_BARANG');
            $table->date('TGL_BLAWB')->nullable();
            $table->string('KD_RESPON', 10)->nullable()->index('KD_RESPON');
            $table->text('KET_RESPON')->nullable();
            $table->date('TGL_HOUSE_BLAWB')->nullable();
            $table->dateTime('WK_REKAM')->nullable();
            $table->timestamps();
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
        Schema::dropIfExists('bc_respone_900');
    }
}
