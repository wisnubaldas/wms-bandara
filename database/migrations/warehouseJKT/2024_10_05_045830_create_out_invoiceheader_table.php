<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutInvoiceheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_invoiceheader', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('InvoiceNumber', 20)->nullable();
            $table->integer('TotalPieces')->nullable();
            $table->decimal('TotalCAW', 10, 2)->nullable();
            $table->decimal('TotalNetto', 10, 2)->nullable();
            $table->decimal('TotalWarehouseFee', 12, 2)->nullable();
            $table->decimal('TotalAssistancyFee', 12, 2)->nullable();
            $table->decimal('TotalCoolRoomFee', 12, 2)->nullable();
            $table->decimal('TotalAirConditioningFee', 12, 2)->nullable();
            $table->decimal('TotalColdStorageFee', 12, 2)->nullable();
            $table->decimal('TotalStrongRoomFee', 12, 2)->nullable();
            $table->decimal('TotalDangerousRoomFee', 12, 2)->nullable();
            $table->decimal('TotalOtherFee', 12, 2)->nullable();
            $table->decimal('TotalAirportContriFee', 12, 2)->default(0.00);
            $table->decimal('AdministrationFee', 12, 2)->nullable();
            $table->decimal('DocumentFee', 12, 2)->nullable();
            $table->decimal('SubTotalFee', 12, 2)->nullable();
            $table->decimal('TaxFee', 12, 2)->nullable();
            $table->decimal('StampFee', 12, 2)->nullable();
            $table->decimal('GrandTotalFee', 12, 2)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfTransaction', 10)->nullable();
            $table->string('TimeOfTransaction', 10)->nullable();
            $table->boolean('PrintNumber')->default(0);
            $table->string('DRSCNumber', 18)->nullable();
            $table->string('DateOfDRSC', 10)->nullable();
            $table->char('ShiftName', 5)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('PaymentCode', 1)->nullable();
            $table->string('AgreementCode', 5)->nullable();
            $table->integer('KursIDR')->nullable();
            $table->string('Referensi', 20)->nullable();
            $table->string('TaxNumber', 20)->nullable();
            $table->bigInteger('id_shipper')->nullable();
            $table->string('CustomerCode', 20)->nullable();
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
        Schema::dropIfExists('out_invoiceheader');
    }
}
