<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpInvoiceheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_invoiceheader', function (Blueprint $table) {
            $table->bigInteger('noid')->index()->primary();
            $table->string('InvoiceNumber', 20)->default('')->index('InvoiceNumber');
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
            $table->decimal('Totalpecahpos', 15, 2)->nullable();
            $table->decimal('AdministrationFee', 10, 2)->nullable();
            $table->decimal('DocumentFee', 10, 2)->nullable();
            $table->decimal('SubTotalFee', 15, 2)->nullable();
            $table->decimal('TaxFee', 15, 2)->nullable();
            $table->float('StampFee')->nullable();
            $table->decimal('GrandTotalFee', 20, 2)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfTransaction', 10)->nullable()->index('DateOfTransaction');
            $table->string('TimeOfTransaction', 8)->nullable()->index('TimeOfTransaction');
            $table->boolean('PrintNumber')->default(0);
            $table->string('DRSCNumber', 18)->nullable()->index('DRSCNumber');
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('PaymentCode', 1)->nullable()->index('PaymentCode');
            $table->string('AgreementCode', 8)->nullable()->index('AgreementCode');
            $table->integer('KursIDR')->default(1);
            $table->string('Referensi', 10)->default('');
            $table->string('TaxNumber', 19)->nullable()->index('TaxNumber');
            $table->string('CustomerCode', 19)->nullable();
            $table->string('ShiftCode', 20)->nullable();
            $table->string('ClearanceType', 10)->nullable();
            $table->string('SPPB', 30)->nullable();
            $table->string('tglSPPB', 10)->nullable();
            $table->boolean('flagPOD')->default(0);
            $table->boolean('void')->default(0)->index('void');
            $table->string('token', 5)->nullable()->index('token');
            $table->string('ref_invoice', 20)->nullable();
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
        Schema::dropIfExists('imp_invoiceheader');
    }
}
