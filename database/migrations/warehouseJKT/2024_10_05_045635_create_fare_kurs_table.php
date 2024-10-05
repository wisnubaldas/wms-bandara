<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFareKursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_kurs', function (Blueprint $table) {
            $table->integer('noid')->index('ix_MasterKurs_autoinc');
            $table->string('DateFrom', 10)->nullable();
            $table->string('TimeFrom', 5)->nullable();
            $table->string('DateUntil', 10)->nullable();
            $table->string('TimeUntil', 5)->nullable();
            $table->float('KursValue')->nullable();
            $table->string('IDCountry', 2)->nullable();
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
        Schema::dropIfExists('fare_kurs');
    }
}
