<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFareSpecialdateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_specialdate', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('warehouseCode', 5)->nullable();
            $table->string('AgreementCode', 10)->nullable();
            $table->string('specialDate', 10)->nullable();
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('fare_specialdate');
    }
}
