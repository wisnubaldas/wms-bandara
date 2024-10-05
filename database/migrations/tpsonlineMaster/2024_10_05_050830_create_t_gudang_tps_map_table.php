<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGudangTpsMapTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_gudang_tps_map', function (Blueprint $table) {
            $table->integer('id_tps_map')->primary();
            $table->tinyInteger('id_user')->nullable();
            $table->tinyInteger('id_tps')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_gudang_tps_map');
    }
}
