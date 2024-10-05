<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutBuildupheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_buildupheader', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('BuildupNumber', 18)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('FlightNumber', 7)->nullable();
            $table->string('Origin', 3)->nullable();
            $table->string('DestinationCode', 3)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('AircraftRegistration', 15)->nullable();
            $table->string('EstimateTimeDeparture', 5)->nullable();
            $table->string('TimeDeparture', 5)->nullable();
            $table->integer('TotalMasterAWB')->nullable();
            $table->integer('PartOfPieces')->nullable();
            $table->integer('TotalPieces')->nullable();
            $table->integer('PartOfNetto')->nullable();
            $table->decimal('TotalNetto', 10, 2)->nullable();
            $table->decimal('TotalVolume', 10, 2)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('OperatorName', 30)->nullable();
            $table->string('token', 5)->nullable();
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
            $table->timestamp('modify_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('out_buildupheader');
    }
}
