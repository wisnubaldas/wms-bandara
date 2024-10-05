<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWrhEquipmentdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wrh_equipmentdetail', function (Blueprint $table) {
            $table->bigInteger('Noid')->index('ix_InternRentalEquipment_Detail_autoinc');
            $table->string('RentalEquipNumber', 18)->nullable();
            $table->string('EquipmentCode', 11)->nullable();
            $table->decimal('Quantity', 18, 0)->nullable();
            $table->decimal('IDRFee', 18, 0)->nullable();
            $table->string('StartRental', 50)->nullable();
            $table->string('DateFrom', 10)->nullable();
            $table->string('DateUntil', 10)->nullable();
            $table->string('FinishRental', 10)->nullable();
            $table->string('TotalHourRental', 5)->nullable();
            $table->decimal('TotalPayment', 18, 0)->nullable();
            $table->decimal('Tax', 18, 0)->nullable();
            $table->integer('void')->default(0);
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
        Schema::dropIfExists('wrh_equipmentdetail');
    }
}
