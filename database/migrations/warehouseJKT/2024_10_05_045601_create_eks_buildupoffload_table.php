<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksBuildupoffloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_buildupoffload', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('BuildUpNumber', 18)->nullable()->index('BuildUpNumber');
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('DestinationCode', 3)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('TransitCode', 3)->nullable();
            $table->integer('PartPieces')->nullable();
            $table->integer('Pieces')->nullable();
            $table->double('PartNetto', 18, 0)->nullable();
            $table->double('Netto', 18, 0)->nullable();
            $table->double('Volume', 18, 0)->nullable();
            $table->string('UldCardNumber', 15)->nullable();
            $table->string('KindOfGood', 20)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('AgenCode', 19)->nullable();
            $table->string('Condition', 50)->nullable();
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('eks_buildupoffload');
    }
}
