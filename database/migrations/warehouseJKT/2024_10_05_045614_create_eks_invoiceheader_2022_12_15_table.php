<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksInvoiceheader20221215Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_invoiceheader_2022_12_15', function (Blueprint $table) {
            $table->bigInteger('noid')->nullable();
            $table->string('InvoiceNumber', 20)->nullable();
            $table->integer('TotalPieces')->nullable();
            $table->decimal('TotalCAW', 10, 2)->nullable();
            $table->decimal('TotalNetto', 10, 2)->nullable();
            $table->decimal('TotalWarehouseFee', 15, 2)->nullable();
            $table->decimal('TotalAssistancyFee', 15, 2)->nullable();
            $table->decimal('TotalCoolRoomFee', 15, 2)->nullable();
            $table->decimal('TotalAirConditioningFee', 15, 2)->nullable();
            $table->decimal('TotalColdStorageFee', 15, 2)->nullable();
            $table->decimal('TotalStrongRoomFee', 15, 2)->nullable();
            $table->decimal('TotalDangerousRoomFee', 15, 2)->nullable();
            $table->decimal('TotalOtherFee', 15, 2)->nullable();
            $table->decimal('TotalAirportContriFee', 15, 2)->nullable();
            $table->decimal('AdministrationFee', 15, 2)->nullable();
            $table->decimal('DocumentFee', 10, 2)->nullable();
            $table->decimal('SubTotalFee', 18, 2)->nullable();
            $table->decimal('TaxFee', 15, 2)->nullable();
            $table->decimal('StampFee', 10, 2)->nullable();
            $table->decimal('GrandTotalFee', 20, 2)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfTransaction', 10)->nullable();
            $table->string('TimeOfTransaction', 8)->nullable();
            $table->tinyInteger('PrintNumber')->nullable();
            $table->string('DRSCNumber', 18)->nullable();
            $table->string('DateOfDRSC', 10)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('PaymentCode', 1)->nullable();
            $table->string('AgreementCode', 5)->nullable();
            $table->double('KursIDR')->nullable();
            $table->string('Referensi', 20)->nullable();
            $table->string('TaxNumber', 19)->nullable();
            $table->string('CustomerCode', 19)->nullable();
            $table->string('ShiftName', 5)->nullable();
            $table->tinyInteger('void')->nullable();
            $table->string('token', 5)->nullable();
            $table->timestamps()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eks_invoiceheader_2022_12_15');
    }
}
