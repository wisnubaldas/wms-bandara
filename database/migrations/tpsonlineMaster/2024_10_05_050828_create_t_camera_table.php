<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTCameraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_camera', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('url_camera', 45)->nullable();
            $table->string('gudang', 45)->nullable()->index('gudang');
            $table->tinyInteger('by_camera')->nullable()->comment("1 = cctv import, 2 = cctv eksport");
            $table->string('link_rtsp', 300)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_camera');
    }
}
