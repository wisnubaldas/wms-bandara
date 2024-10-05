<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstDepartureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_departure', function (Blueprint $table) {
            $table->bigInteger('Noid')->index('ix_MasterDepartureSchedule_autoinc');
            $table->string('TimeDeparture', 10)->nullable();
            $table->string('ActualTimeDeparture', 10)->nullable();
            $table->string('Departure', 50)->nullable();
            $table->string('AirlinesCode', 20)->nullable();
            $table->string('FlightNo', 10)->nullable();
            $table->string('ACType', 50)->nullable();
            $table->decimal('PayLoad', 18, 0)->nullable();
            $table->decimal('CargoLoad', 18, 0)->nullable();
            $table->string('Terminal', 50)->nullable();
            $table->string('Remarks', 50)->nullable();
            $table->string('DateOfDeparture', 10)->nullable();
            $table->string('DateOfEntry', 10)->nullable();
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
        Schema::dropIfExists('mst_departure');
    }
}
