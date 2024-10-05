<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksApprovalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_approval', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('HostAWB', 25)->nullable()->index('HostAWB');
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('Destination', 3)->nullable();
            $table->string('Route', 6)->nullable();
            $table->decimal('PartOfPieces', 18, 0)->nullable();
            $table->decimal('Pieces', 18, 0)->nullable();
            $table->string('Packaging_Type', 2)->nullable();
            $table->string('ShipperCode', 19)->nullable()->index('ShipperCode');
            $table->string('AGenCode', 19)->nullable()->index('AGenCode');
            $table->string('ConsigneeCode', 19)->nullable()->index('ConsigneeCode');
            $table->string('ShipperName', 50)->nullable();
            $table->string('PhoneNumber', 15)->nullable();
            $table->string('HSCode', 5)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfSLI', 10)->nullable();
            $table->string('TimeOFSLI', 8)->nullable();
            $table->integer('StatusProof')->default(0);
            $table->string('specialhandling01', 50)->nullable();
            $table->string('specialhandling02', 50)->nullable();
            $table->boolean('DirectMaster')->default(0);
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('eks_approval');
    }
}
