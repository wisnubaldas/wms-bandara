<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSigoEksInvoicedetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sigo_eks_invoicedetail', function (Blueprint $table) {
            $table->bigInteger('Noid')->primary();
            $table->string('InvoiceNumber', 20)->nullable()->index('InvoiceNumber');
            $table->string('ProofNumber', 18)->nullable()->index('ProofNumber');
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->integer('Pieces')->nullable();
            $table->decimal('CAW', 10, 2)->nullable();
            $table->decimal('Netto', 10, 2)->nullable();
            $table->decimal('WarehouseFee', 10, 2)->nullable();
            $table->decimal('AssistancyFee', 10, 2)->nullable();
            $table->decimal('CoolRoomFee', 10, 2)->nullable();
            $table->decimal('AirConditioningFee', 10, 2)->nullable();
            $table->decimal('ColdStorageFee', 10, 2)->nullable();
            $table->decimal('StrongRoomFee', 10, 2)->nullable();
            $table->decimal('DangerousRoomFee', 10, 2)->nullable();
            $table->decimal('OtherFee', 10, 2)->nullable();
            $table->decimal('AirportContriFee', 10, 2)->nullable();
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
        Schema::dropIfExists('sigo_eks_invoicedetail');
    }
}
