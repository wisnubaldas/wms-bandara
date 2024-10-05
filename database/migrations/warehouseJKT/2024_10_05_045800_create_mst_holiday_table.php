<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstHolidayTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_holiday', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('tanggal', 10)->nullable();
            $table->string('remarks', 100)->nullable();
            $table->boolean('void')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_holiday');
    }
}
