<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterBc11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_bc11', function (Blueprint $table) {
            $table->string('no_bc11', 6)->nullable();
            $table->string('tgl_bc11', 8)->nullable();
            $table->string('nm_angkut', 50)->nullable();
            $table->string('tgl_tiba', 8)->nullable();
            $table->string('no_voy_flight', 30)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('master_bc11');
    }
}
