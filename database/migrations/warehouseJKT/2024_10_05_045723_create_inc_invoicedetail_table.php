<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncInvoicedetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_invoicedetail', function (Blueprint $table) {
            $table->bigInteger('_id')->index('ix_IncomingInvoice_Detail_autoinc');
            $table->bigInteger('id_header');
            $table->string('InvoiceNumber', 20)->nullable();
            $table->bigInteger('id_proof')->nullable();
            $table->string('ProofNumber', 18)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->decimal('Pieces', 18, 0)->nullable();
            $table->decimal('CAW', 18, 0)->nullable();
            $table->decimal('Netto', 18, 0)->nullable();
            $table->decimal('WarehouseFee', 18, 0)->nullable();
            $table->decimal('AssistancyFee', 18, 0)->nullable();
            $table->decimal('CoolRoomFee', 18, 0)->nullable();
            $table->decimal('AirConditioningFee', 18, 0)->nullable();
            $table->decimal('ColdStorageFee', 18, 0)->nullable();
            $table->decimal('StrongRoomFee', 18, 0)->nullable();
            $table->decimal('DangerousRoomFee', 18, 0)->nullable();
            $table->decimal('OtherFee', 18, 0)->nullable();
            $table->decimal('AirportContriFee', 18, 0)->nullable();
            $table->integer('OverStay')->default(1);
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
        Schema::dropIfExists('inc_invoicedetail');
    }
}
