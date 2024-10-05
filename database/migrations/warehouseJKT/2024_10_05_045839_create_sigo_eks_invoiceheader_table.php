<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSigoEksInvoiceheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sigo_eks_invoiceheader', function (Blueprint $table) {
            $table->string('InvoiceNumber', 20);
            $table->integer('TotalPieces')->nullable();
            $table->decimal('TotalCAW', 10, 2)->nullable();
            $table->decimal('TotalNetto', 10, 2)->nullable();
            $table->decimal('TotalWarehouseFee', 10, 2)->nullable();
            $table->decimal('TotalAssistancyFee', 10, 2)->nullable();
            $table->decimal('TotalCoolRoomFee', 10, 2)->nullable();
            $table->decimal('TotalAirConditioningFee', 10, 2)->nullable();
            $table->decimal('TotalColdStorageFee', 10, 2)->nullable();
            $table->decimal('TotalStrongRoomFee', 10, 2)->nullable();
            $table->decimal('TotalDangerousRoomFee', 10, 2)->nullable();
            $table->decimal('TotalOtherFee', 10, 2)->nullable();
            $table->decimal('TotalAirportContriFee', 10, 2)->nullable();
            $table->decimal('AdministrationFee', 10, 2)->nullable();
            $table->decimal('DocumentFee', 10, 2)->nullable();
            $table->decimal('SubTotalFee', 10, 2)->nullable();
            $table->decimal('TaxFee', 10, 2)->nullable();
            $table->decimal('StampFee', 10, 2)->nullable();
            $table->decimal('GrandTotalFee', 10, 2)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfTransaction', 10)->nullable();
            $table->string('TimeOfTransaction', 10)->nullable();
            $table->string('DRSCNumber', 18)->nullable();
            $table->string('DateOfDRSC', 10)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('PaymentCode', 1)->nullable();
            $table->string('AgreementCode', 5)->nullable();
            $table->decimal('KursIDR', 18, 0)->nullable();
            $table->string('Referensi', 20)->nullable();
            $table->string('TaxNumber', 19)->nullable();
            $table->string('CustomerCode', 19)->nullable();
            $table->string('ShiftName', 5)->nullable();
            $table->integer('void')->default(0);
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
        Schema::dropIfExists('sigo_eks_invoiceheader');
    }
}
