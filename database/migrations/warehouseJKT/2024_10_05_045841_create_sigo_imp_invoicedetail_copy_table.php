<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSigoImpInvoicedetailCopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sigo_imp_invoicedetail_copy', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('InvoiceNumber', 20)->nullable()->index('InvoiceNumber');
            $table->string('DeliveryOrderNumber', 20)->nullable()->index('DeliveryOrderNumber');
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('HostMAWB', 25)->nullable()->index('HostMAWB');
            $table->integer('Pieces')->nullable();
            $table->decimal('CAW', 10, 2)->nullable();
            $table->decimal('Netto', 10, 2)->nullable();
            $table->decimal('WarehouseFee', 15, 2)->nullable();
            $table->decimal('AssistancyFee', 15, 2)->nullable();
            $table->decimal('CoolRoomFee', 15, 2)->nullable();
            $table->decimal('AirConditioningFee', 15, 2)->nullable();
            $table->decimal('ColdStorageFee', 15, 2)->nullable();
            $table->decimal('StrongRoomFee', 15, 2)->nullable();
            $table->decimal('DangerousRoomFee', 15, 2)->nullable();
            $table->decimal('OtherFee', 15, 2)->nullable();
            $table->integer('OverStay')->default(0);
            $table->string('token', 5)->nullable()->index('token');
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
        Schema::dropIfExists('sigo_imp_invoicedetail_copy');
    }
}
