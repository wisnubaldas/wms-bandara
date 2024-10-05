<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcRespone300DetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bc_respone_300_detail', function (Blueprint $table) {
            $table->bigInteger('id')->primary()->unique();
            $table->integer('id_header')->nullable()->index('id_header');
            $table->string('NO_BARANG', 50)->nullable()->index('service_number');
            $table->date('TGL_HOUSE_BLAWB')->nullable();
            $table->string('TOTAL_TAGIHAN', 45)->nullable();
            $table->string('SERI_BRG', 50)->nullable();
            $table->string('UR_BRG')->nullable();
            $table->string('KET_LARTAS', 100)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bc_respone_300_detail');
    }
}
