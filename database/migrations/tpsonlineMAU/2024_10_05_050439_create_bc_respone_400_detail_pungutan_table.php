<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcRespone400DetailPungutanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bc_respone_400_detail_pungutan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->bigInteger('id_header')->nullable()->index('index2');
            $table->string('KD_PUNGUTAN', 10)->nullable();
            $table->string('NILAI', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bc_respone_400_detail_pungutan');
    }
}
