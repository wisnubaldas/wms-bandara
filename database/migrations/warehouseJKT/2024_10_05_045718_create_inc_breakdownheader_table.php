<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncBreakdownheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_breakdownheader', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('BreakdownNumber', 18)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('OriginCode', 6)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('DateOfArrival', 10)->nullable();
            $table->string('TimeOfArrival', 5)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('OperatorName', 25)->nullable();
            $table->decimal('TotalMasterAWB', 18, 0)->nullable();
            $table->decimal('TotalPieces', 18, 0)->nullable();
            $table->decimal('TotalNetto', 18, 0)->nullable();
            $table->decimal('TotalCAW', 18, 0)->nullable();
            $table->string('AirCraftNumber', 20)->nullable();
            $table->string('Supervisor', 50)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('inc_breakdownheader');
    }
}
