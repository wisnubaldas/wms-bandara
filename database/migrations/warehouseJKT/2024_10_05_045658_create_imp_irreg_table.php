<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpIrregTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_irreg', function (Blueprint $table) {
            $table->integer('_id')->primary();
            $table->string('IrregNumber', 18)->nullable()->index('IrregNumber');
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('ShipperCode', 19)->nullable();
            $table->string('ConsigneeCode', 19)->nullable();
            $table->integer('Pieces')->nullable();
            $table->integer('partOfPieces')->nullable();
            $table->double('Weight')->nullable();
            $table->string('KindOfGood', 50)->nullable();
            $table->string('FlightNo', 5)->nullable();
            $table->string('DateOfFlight', 10)->nullable()->index('DateOfFlight');
            $table->string('Route', 6)->nullable();
            $table->string('Manifest', 15)->nullable();
            $table->string('Remarks', 200)->nullable();
            $table->string('DateOfEntry', 10)->nullable();
            $table->string('TimeOfEntry', 8)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('Supervisor', 50)->nullable();
            $table->boolean('DIS')->default(0);
            $table->string('AirlinesCode', 2)->nullable();
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
        Schema::dropIfExists('imp_irreg');
    }
}
