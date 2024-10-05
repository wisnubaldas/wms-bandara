<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpBreakdownheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_breakdownheader', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('BreakdownNumber', 20)->default('');
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('OriginCode', 6)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('DateOfFlight', 10)->nullable()->index('DateOfFlight');
            $table->string('DateOfArrival', 10)->nullable()->index('DateOfArrival');
            $table->string('TimeOfArrival', 8)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('OperatorName', 25)->nullable();
            $table->integer('TotalMasterAWB')->nullable();
            $table->integer('TotalPieces')->nullable();
            $table->decimal('TotalNetto', 10, 2)->nullable();
            $table->decimal('TotalCAW', 10, 2)->nullable();
            $table->string('AirCraftNumber', 20)->nullable();
            $table->string('Supervisor', 50)->nullable();
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable()->index('token');
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
        Schema::dropIfExists('imp_breakdownheader');
    }
}
