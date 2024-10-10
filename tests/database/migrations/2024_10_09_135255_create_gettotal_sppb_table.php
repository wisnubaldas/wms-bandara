<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGettotalSppbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gettotal_sppb', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('Tgl_SPPB', 10)->nullable();
            $table->string('NO_SPPB', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('gettotal_sppb');
    }
}
