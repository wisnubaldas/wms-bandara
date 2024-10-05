<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterdatabaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterdatabase', function (Blueprint $table) {
            $table->integer('noid')->primary();
            $table->string('databaseName', 50);
            $table->string('databaseCode', 45);
            $table->string('warehouseCode', 5)->nullable();
            $table->string('gudangcode', 4)->nullable();
            $table->string('token', 5)->nullable();
            $table->string('DepartmenCode', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterdatabase');
    }
}
