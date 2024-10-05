<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksInvoicedetailSisaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_invoicedetail_sisa', function (Blueprint $table) {
            $table->bigInteger('noid');
            $table->string('InvoiceNumber', 20)->nullable()->index('InvoiceNumber');
            $table->string('ProofNumber', 20)->nullable()->index('ProofNumber');
            $table->string('MasterAWB', 15)->default('')->index('MasterAWB');
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
            $table->decimal('AirportContriFee', 15, 2)->nullable();
            $table->integer('overstay')->default(0);
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
        Schema::dropIfExists('eks_invoicedetail_sisa');
    }
}
