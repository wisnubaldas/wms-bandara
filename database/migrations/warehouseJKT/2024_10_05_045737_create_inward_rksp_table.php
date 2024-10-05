<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInwardRkspTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inward_rksp', function (Blueprint $table) {
            $table->bigInteger('NoID')->primary();
            $table->string('TwoLetterCode', 2)->nullable();
            $table->string('RKSPTime', 5)->nullable();
            $table->string('LimitTime', 5)->nullable();
            $table->string('TimeOfArrive', 5)->nullable();
            $table->string('TimeOdDefarture', 5)->nullable();
            $table->string('FlightNumber', 4)->nullable();
            $table->string('Route', 7)->nullable();
            $table->string('DateOfBegin', 10)->nullable();
            $table->string('DateOfUntil', 10)->nullable();
            $table->string('DayFlag1', 1)->nullable();
            $table->string('DayFlag2', 1)->nullable();
            $table->string('DayFlag3', 1)->nullable();
            $table->string('DayFlag4', 1)->nullable();
            $table->string('DayFlag5', 1)->nullable();
            $table->string('DayFlag6', 1)->nullable();
            $table->string('DayFlag7', 1)->nullable();
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('inward_rksp');
    }
}
