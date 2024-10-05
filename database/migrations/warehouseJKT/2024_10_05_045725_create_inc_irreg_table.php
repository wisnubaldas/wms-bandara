<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncIrregTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_irreg', function (Blueprint $table) {
            $table->bigInteger('_id')->index()->primary();
            $table->string('IrregNumber', 18)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->bigInteger('id_shipper')->nullable();
            $table->string('ShipperCode', 19)->nullable();
            $table->bigInteger('id_consignee')->nullable();
            $table->string('ConsigneeCode', 19)->nullable();
            $table->decimal('Pieces', 18, 0)->nullable();
            $table->decimal('partOfPieces', 18, 0)->nullable();
            $table->float('Weight')->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('KindOfGood', 50)->nullable();
            $table->string('FlightNo', 5)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('Route', 6)->nullable();
            $table->string('Manifest', 15)->nullable();
            $table->string('Remarks', 200)->nullable();
            $table->string('DateOfEntry', 10)->nullable();
            $table->string('TimeOfEntry', 5)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('Supervisor', 50)->nullable();
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
        Schema::dropIfExists('inc_irreg');
    }
}
