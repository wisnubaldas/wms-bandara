<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMGudangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gudang', function (Blueprint $table) {
            $table->integer('Noid')->nullable();
            $table->string('kd_Gudang', 50)->nullable();
            $table->string('Nama_Gudang', 50)->nullable();
            $table->integer('Active')->nullable();
            $table->integer('void')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_gudang');
    }
}
