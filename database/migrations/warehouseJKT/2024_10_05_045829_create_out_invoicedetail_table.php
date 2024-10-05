<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutInvoicedetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_invoicedetail', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->bigInteger('id_header')->nullable();
            $table->string('InvoiceNumber', 20)->nullable();
            $table->bigInteger('id_weighing')->nullable();
            $table->string('ProofNumber', 20)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->integer('Pieces')->nullable();
            $table->decimal('CAW', 10, 2)->nullable();
            $table->decimal('Netto', 10, 2)->nullable();
            $table->decimal('WarehouseFee', 12, 2)->nullable();
            $table->decimal('AssistancyFee', 12, 2)->nullable();
            $table->decimal('CoolRoomFee', 12, 2)->nullable();
            $table->decimal('AirConditioningFee', 12, 2)->nullable();
            $table->decimal('ColdStorageFee', 12, 2)->nullable();
            $table->decimal('StrongRoomFee', 12, 2)->nullable();
            $table->decimal('DangerousRoomFee', 12, 2)->nullable();
            $table->decimal('OtherFee', 12, 2)->nullable();
            $table->decimal('AirportContriFee', 12, 2)->nullable();
            $table->decimal('overstay', 12, 2)->nullable();
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
        Schema::dropIfExists('out_invoicedetail');
    }
}
