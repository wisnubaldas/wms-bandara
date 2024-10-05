<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutBuildupoffloadTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_buildupoffload', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->bigInteger('id_header')->nullable();
            $table->string('BuildupNumber', 18)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('origin', 3)->nullable();
            $table->string('DestinationCode', 3)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->string('TransitCode', 3)->nullable();
            $table->integer('PartPieces')->nullable();
            $table->integer('Pieces')->nullable();
            $table->integer('PartNetto')->nullable();
            $table->decimal('Netto', 11, 2)->nullable();
            $table->decimal('Volume', 11, 2)->nullable();
            $table->string('UldCardNumber', 15)->nullable();
            $table->string('KindOfgood', 20)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->bigInteger('id_agen')->nullable();
            $table->string('agentcode', 20)->nullable();
            $table->string('Kondition', 50)->nullable();
            $table->string('token', 5)->nullable();
            $table->boolean('void')->default(0);
            $table->timestamp('created_at', 1)->default('current_timestamp(1)');
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
        Schema::dropIfExists('out_buildupoffload');
    }
}
