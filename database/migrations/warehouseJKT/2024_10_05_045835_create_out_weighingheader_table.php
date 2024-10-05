<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutWeighingheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_weighingheader', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('ProofNumber', 20);
            $table->string('MasterAWB', 15)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('origin', 3)->nullable();
            $table->string('Destination', 3)->nullable();
            $table->string('FlightNumber', 7)->nullable();
            $table->bigInteger('id_shipper')->nullable();
            $table->string('shipperCode', 20)->nullable();
            $table->bigInteger('id_agent')->nullable();
            $table->string('agentCode', 20)->nullable();
            $table->bigInteger('id_consignee')->nullable();
            $table->string('consigneeCode', 20)->nullable();
            $table->string('AgenPIC', 50)->nullable();
            $table->decimal('TotalPieces', 10, 0)->nullable();
            $table->integer('TotalPallet')->nullable();
            $table->decimal('TotalGross', 8, 2)->nullable();
            $table->decimal('TotalNetto', 8, 2)->nullable();
            $table->decimal('TotalVolume', 8, 2)->nullable();
            $table->integer('TotalNettoSMU')->nullable();
            $table->decimal('TotalCAW', 8, 2)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('DateOfEntry', 10)->nullable();
            $table->string('TimeOfEntry', 5)->nullable();
            $table->string('MultiVolume', 1)->nullable();
            $table->string('PaymentCode', 1)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('AgreementCode', 5)->nullable();
            $table->boolean('PrintNumber')->default(0);
            $table->boolean('Report')->default(0);
            $table->bigInteger('id_invoice')->nullable();
            $table->string('invoicenumber', 20)->nullable();
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('out_weighingheader');
    }
}
