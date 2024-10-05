<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksInvoicedetail202104Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_invoicedetail_2021_04', function (Blueprint $table) {
            $table->bigInteger('noid')->default(0)->index('noid');
            $table->string('InvoiceNumber', 20)->nullable()->index('Invoicenumber');
            $table->string('ProofNumber', 20)->nullable()->index('ProofNumber');
            $table->string('MasterAWB', 15)->default('');
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
        Schema::dropIfExists('eks_invoicedetail_2021_04');
    }
}
