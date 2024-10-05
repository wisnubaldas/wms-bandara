<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksWeighingheader2021Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_weighingheader_2021', function (Blueprint $table) {
            $table->bigInteger('noid')->default(0)->index('noid');
            $table->string('ProofNumber', 18)->default('')->index('ProofNumber');
            $table->string('MasterAWB', 15)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('Origin', 3)->nullable();
            $table->string('Destination', 3)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('ShipperCode', 19)->nullable();
            $table->string('AgenCode', 19)->nullable();
            $table->string('ConsigneeCode', 19)->nullable();
            $table->string('AgenPIC', 50)->nullable();
            $table->integer('TotalPieces')->nullable();
            $table->decimal('TotalPallet', 10, 2)->nullable();
            $table->decimal('TotalNetto', 10, 2)->nullable();
            $table->decimal('TotalVolume', 10, 2)->nullable();
            $table->decimal('TotalCAW', 10, 2)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('DateOfEntry', 10)->nullable();
            $table->string('TimeOfEntry', 8)->nullable();
            $table->string('BookingCode', 5)->nullable();
            $table->string('MultiVolume', 1)->nullable();
            $table->string('PaymentCode', 1)->nullable();
            $table->boolean('Directmaster')->default(0);
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('InvoiceNumber', 20)->nullable();
            $table->boolean('PrintNumber')->default(0);
            $table->boolean('report')->default(0);
            $table->boolean('RCS')->default(0);
            $table->boolean('FHL')->default(0);
            $table->boolean('FWB')->default(0);
            $table->boolean('void')->default(0);
            $table->boolean('gateIn')->default(0);
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
        Schema::dropIfExists('eks_weighingheader_2021');
    }
}
