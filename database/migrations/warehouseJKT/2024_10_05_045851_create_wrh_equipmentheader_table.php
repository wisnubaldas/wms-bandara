<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWrhEquipmentheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wrh_equipmentheader', function (Blueprint $table) {
            $table->string('WarehouseType', 1)->nullable();
            $table->string('RentalEquipNumber', 18)->nullable();
            $table->string('ReceiptNumber', 18)->nullable();
            $table->string('DateOfRental', 10)->nullable();
            $table->string('TimeOfRental', 5)->nullable();
            $table->string('ShipperCode', 19)->nullable();
            $table->string('PICName', 25)->nullable();
            $table->decimal('StampFee', 18, 0)->nullable();
            $table->float('SubTotalFee')->nullable();
            $table->string('PaymentCode', 1)->nullable();
            $table->string('ChasierCode', 1)->nullable();
            $table->integer('Void')->default(0);
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('UserId', 5)->nullable();
            $table->string('TimeOfPrint', 5)->nullable();
            $table->integer('PrintCode')->default(0);
            $table->integer('DRSCNumber')->default(0);
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
        Schema::dropIfExists('wrh_equipmentheader');
    }
}
