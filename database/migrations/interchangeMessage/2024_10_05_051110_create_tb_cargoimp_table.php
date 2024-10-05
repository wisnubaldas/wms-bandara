<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbCargoimpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_cargoimp', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('kd_SMI', 4)->nullable();
            $table->string('name_SMI', 100)->nullable();
            $table->string('version_SMI', 17)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_cargoimp');
    }
}
