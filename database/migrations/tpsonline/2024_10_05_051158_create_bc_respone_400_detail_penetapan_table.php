<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBcRespone400DetailPenetapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bc_respone_400_detail_penetapan', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->bigInteger('id_header')->nullable()->index('index2');
            $table->string('SERI_BRG', 5)->nullable();
            $table->string('JML_SAT', 45)->nullable();
            $table->string('NILAI_PABEAN', 20)->nullable();
            $table->string('HS_CODE', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bc_respone_400_detail_penetapan');
    }
}
