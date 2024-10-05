<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncWeighingheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_weighingheader', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('ProofNumber', 18)->nullable();
            $table->bigInteger('id_Consignee')->nullable();
            $table->string('ConsigneeCode', 20)->nullable();
            $table->string('ReceiverName', 50)->nullable();
            $table->string('Transit', 15)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->integer('PartOfPieces')->nullable();
            $table->integer('TotalOfPieces')->nullable();
            $table->integer('TotalPallet')->nullable();
            $table->integer('TotalLengthOfCargo')->nullable();
            $table->integer('TotalWeightOfCargo')->nullable();
            $table->integer('TotalTallOfCargo')->nullable();
            $table->decimal('TotalGross', 10, 2)->nullable();
            $table->decimal('TotalNetto', 10, 2)->nullable();
            $table->decimal('TotalVolume', 10, 2)->nullable();
            $table->decimal('TotalCAW', 10, 2)->nullable();
            $table->string('DateOfEntry', 10)->nullable();
            $table->string('TimeOfEntry', 5)->nullable();
            $table->string('PaymentCode', 1)->nullable();
            $table->bigInteger('id_invoice')->default(0);
            $table->string('invoicenumber', 20)->nullable();
            $table->boolean('PrintNumber')->default(0);
            $table->integer('MinimumCode')->nullable();
            $table->boolean('multivolume')->default(0);
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
        Schema::dropIfExists('inc_weighingheader');
    }
}
