<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSigoImpInvoiceheaderCopyBelumEditTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sigo_imp_invoiceheader_copy_belum_edit', function (Blueprint $table) {
            $table->bigInteger('noid');
            $table->string('InvoiceNumber', 20);
            $table->integer('TotalPieces')->nullable();
            $table->decimal('TotalCAW', 18, 2)->nullable();
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
            $table->decimal('AdministrationFee', 10, 2)->nullable();
            $table->decimal('DocumentFee', 10, 2)->nullable();
            $table->decimal('SubTotalFee', 10, 2)->nullable();
            $table->decimal('TaxFee', 15, 2)->nullable();
            $table->decimal('StampFee', 10, 2)->nullable();
            $table->decimal('GrandTotalFee', 15, 2)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfTransaction', 10)->nullable()->index('DateOfTransaction');
            $table->string('TimeOfTransaction', 10)->nullable();
            $table->string('DRSCNumber', 18)->nullable()->index('DRSCNumber');
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('PaymentCode', 1)->nullable();
            $table->string('AgreementCode', 5)->nullable();
            $table->decimal('KursIDR', 18, 0)->nullable();
            $table->string('Referensi', 10)->default('');
            $table->string('TaxNumber', 19)->nullable();
            $table->string('CustomerCode', 19)->nullable();
            $table->string('ShiftCode', 5)->nullable();
            $table->string('ClearanceType', 10)->nullable();
            $table->string('SPPB', 6)->nullable();
            $table->string('tglSPPB', 10)->nullable();
            $table->integer('void')->default(0);
            $table->string('token', 5)->nullable()->index('token');
            $table->timestamp('created_at')->default('current_timestamp()');

            $table->primary(['noid', 'InvoiceNumber']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sigo_imp_invoiceheader_copy_belum_edit');
    }
}
