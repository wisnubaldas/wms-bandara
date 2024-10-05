<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksInvoiceheader202104Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_invoiceheader_2021_04', function (Blueprint $table) {
            $table->bigInteger('noid')->default(0)->index('noid');
            $table->string('InvoiceNumber', 20)->default('')->index('Invoicenumber');
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
            $table->boolean('PrintNumber')->default(0);
            $table->string('DRSCNumber', 18)->nullable();
            $table->string('DateOfDRSC', 10)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('PaymentCode', 1)->nullable();
            $table->string('AgreementCode', 5)->nullable();
            $table->double('KursIDR')->nullable();
            $table->string('Referensi', 20)->nullable();
            $table->string('TaxNumber', 19)->nullable();
            $table->string('CustomerCode', 19)->nullable()->index('CustomerCode');
            $table->string('ShiftName', 5)->nullable();
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('eks_invoiceheader_2021_04');
    }
}
