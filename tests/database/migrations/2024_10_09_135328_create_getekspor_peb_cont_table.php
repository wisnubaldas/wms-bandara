<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeteksporPebContTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getekspor_peb_cont', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->integer('id_header')->nullable();
            $table->string('CAR', 26)->nullable();
            $table->string('SERI_CONT', 11)->nullable();
            $table->string('NO_CONT', 11)->nullable();
            $table->string('SIZE', 2)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('getekspor_peb_cont');
    }
}
