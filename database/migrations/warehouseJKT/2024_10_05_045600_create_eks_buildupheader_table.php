<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksBuildupheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_buildupheader', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('BuildupNumber', 18);
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('FlightNumber', 8)->nullable();
            $table->string('DestinationCode', 6)->nullable();
            $table->string('DateOfFlight', 10)->nullable()->index('DateOfFlight');
            $table->string('AircraftRegistration', 15)->nullable();
            $table->string('EstimateTimeDeparture', 5)->nullable();
            $table->string('TimeDeparture', 5)->nullable();
            $table->integer('TotalMasterAWB')->nullable();
            $table->integer('PartOfPieces')->nullable();
            $table->integer('TotalPieces')->nullable();
            $table->float('PartOfNetto')->nullable();
            $table->float('TotalNetto')->nullable();
            $table->float('TotalVolume')->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('OperatorName', 30)->nullable();
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
            $table->boolean('void')->default(0);
            $table->string('ffm_MessageKey', 50)->default('0');
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('eks_buildupheader');
    }
}
