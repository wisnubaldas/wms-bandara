<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_booking', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('Destination', 6)->nullable();
            $table->integer('Pieces')->nullable();
            $table->float('Weight')->nullable();
            $table->float('Volume')->nullable();
            $table->string('Route', 6)->nullable()->index('Route');
            $table->string('FlightNo', 10)->nullable();
            $table->string('DateOfFlight', 10)->nullable()->index('DateOfFlight');
            $table->string('KindOfGood', 50)->nullable();
            $table->string('StatusBooking', 5)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
            $table->string('AgenCode', 20)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->default('71901');
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
        Schema::dropIfExists('eks_booking');
    }
}
