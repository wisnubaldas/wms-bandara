<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTFlightscheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_flightschedule', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('FLightNo', 10)->nullable();
            $table->string('Origin', 5)->nullable();
            $table->string('Dest', 5)->nullable();
            $table->string('ETA_ETD', 5)->nullable();
            $table->string('fromdate', 10)->nullable();
            $table->string('untildate', 10)->nullable();
            $table->boolean('isSatu')->default(0);
            $table->boolean('isDua')->default(0);
            $table->boolean('isTiga')->default(0);
            $table->boolean('isEmpat')->default(0);
            $table->boolean('isLima')->default(0);
            $table->boolean('isEnam')->default(0);
            $table->boolean('isTujuh')->default(0);
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
        Schema::dropIfExists('t_flightschedule');
    }
}
