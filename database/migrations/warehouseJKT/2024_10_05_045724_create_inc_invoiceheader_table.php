<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncInvoiceheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_invoiceheader', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('InvoiceNumber', 20)->nullable();
            $table->decimal('TotalPieces', 18, 0)->nullable();
            $table->decimal('TotalCAW', 18, 0)->nullable();
            $table->decimal('TotalNetto', 18, 0)->nullable();
            $table->decimal('TotalWarehouseFee', 18, 0)->nullable();
            $table->decimal('TotalAssistancyFee', 10, 0)->nullable();
            $table->decimal('TotalCoolRoomFee', 10, 0)->nullable();
            $table->decimal('TotalAirConditioningFee', 10, 0)->nullable();
            $table->decimal('TotalColdStorageFee', 10, 0)->nullable();
            $table->decimal('TotalStrongRoomFee', 10, 0)->nullable();
            $table->decimal('TotalDangerousRoomFee', 10, 0)->nullable();
            $table->decimal('TotalOtherFee', 10, 0)->nullable();
            $table->decimal('TotalAirportContriFee', 10, 0)->nullable();
            $table->decimal('AdministrationFee', 10, 0)->nullable();
            $table->decimal('DocumentFee', 10, 0)->nullable();
            $table->decimal('SubTotalFee', 10, 0)->nullable();
            $table->decimal('TaxFee', 10, 0)->nullable();
            $table->decimal('StampFee', 10, 0)->nullable();
            $table->decimal('GrandTotalFee', 10, 0)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfTransaction', 10)->nullable();
            $table->string('TimeOfTransaction', 5)->nullable();
            $table->boolean('PrintNumber')->default(0);
            $table->string('DRSCNumber', 18)->nullable();
            $table->string('DateOfDRSC', 10)->nullable();
            $table->char('ShiftName', 10)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('PaymentCode', 1)->nullable();
            $table->string('AgreementCode', 10)->nullable();
            $table->decimal('KursIDR', 18, 0)->nullable();
            $table->string('Referensi', 20)->nullable();
            $table->string('TaxNumber', 21)->nullable();
            $table->bigInteger('id_customer')->nullable();
            $table->string('CustomerCode', 19)->nullable();
            $table->bigInteger('id_pod')->nullable();
            $table->string('pod_number', 18)->nullable();
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
        Schema::dropIfExists('inc_invoiceheader');
    }
}
