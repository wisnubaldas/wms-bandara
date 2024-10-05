<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksBuildupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_buildup', function (Blueprint $table) {
            $table->bigInteger('Noid')->primary();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->integer('Pieces')->nullable();
            $table->string('UldName', 20)->nullable()->index('UldName');
            $table->string('Airlinescode', 2)->nullable()->index('Airlinescode');
            $table->string('FlightNo', 6)->nullable();
            $table->string('Route', 6)->nullable();
            $table->string('Flightdate', 10)->nullable();
            $table->boolean('flag_Print')->default(0);
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
            $table->timestamp('modify_at')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eks_buildup');
    }
}
