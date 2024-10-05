<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFareDirectoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_directory', function (Blueprint $table) {
            $table->bigInteger('noid')->index()->primary();
            $table->string('LocationCode', 5)->nullable();
            $table->string('WarehouseCode', 5)->nullable();
            $table->string('AgreementCode', 10)->nullable();
            $table->string('Datefrom', 10)->nullable();
            $table->string('DateUntil', 10)->nullable();
            $table->string('ItemCode', 5)->nullable();
            $table->float('ValueItem')->nullable();
            $table->integer('startday')->nullable();
            $table->integer('untilday')->nullable();
            $table->float('PENGALI')->nullable();
            $table->integer('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fare_directory');
    }
}
