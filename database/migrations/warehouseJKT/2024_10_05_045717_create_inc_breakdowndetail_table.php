<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncBreakdowndetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_breakdowndetail', function (Blueprint $table) {
            $table->bigInteger('_id')->index()->primary();
            $table->bigInteger('id_header');
            $table->string('BreakdownNumber', 18)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->decimal('Parsial', 18, 0)->nullable();
            $table->string('TransitCode', 3)->nullable();
            $table->decimal('Pieces', 18, 0)->nullable();
            $table->decimal('Netto', 18, 0)->nullable();
            $table->decimal('CAW', 18, 0)->nullable();
            $table->string('KindOfCode', 20)->nullable();
            $table->string('UldCardNumber', 15)->nullable();
            $table->string('Remark', 50)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfBreakdown', 10)->nullable();
            $table->string('TimeOfBreakdown', 10)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('OriginCode', 6)->nullable();
            $table->bigInteger('id_proof')->nullable();
            $table->string('ProofNumber', 18)->nullable();
            $table->bigInteger('id_pod')->nullable();
            $table->string('pod_number', 20)->nullable();
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
        Schema::dropIfExists('inc_breakdowndetail');
    }
}
