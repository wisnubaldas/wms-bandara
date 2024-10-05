<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutApprovalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_approval', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('MasterAWB', 15)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('Origin', 3)->nullable();
            $table->string('Destination', 3)->nullable();
            $table->integer('PartOfPieces')->nullable();
            $table->integer('Pieces')->nullable();
            $table->bigInteger('id_shipper')->nullable();
            $table->string('shipperCode', 20)->nullable();
            $table->bigInteger('id_agent')->nullable();
            $table->string('agentCode', 20)->nullable();
            $table->bigInteger('id_consignee')->nullable();
            $table->string('consigneeCode', 20)->nullable();
            $table->string('ShipperName', 50)->nullable();
            $table->string('PhoneNumber', 15)->nullable();
            $table->string('HSCode', 5)->nullable();
            $table->string('kindofgood', 20)->nullable();
            $table->string('specialhandling', 50)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfSLI', 10)->nullable();
            $table->string('TimeOFSLI', 5)->nullable();
            $table->boolean('StatusProof')->default(0);
            $table->string('ProofNumber', 20)->nullable();
            $table->string('token', 5)->default('71905');
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
        Schema::dropIfExists('out_approval');
    }
}
