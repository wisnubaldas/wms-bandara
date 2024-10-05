<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncDeliorderheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_deliorderheader', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('DONumber', 18)->nullable();
            $table->decimal('TotalPieces', 18, 0)->nullable();
            $table->decimal('TotalNetto', 18, 0)->nullable();
            $table->float('TotalVolume')->nullable();
            $table->bigInteger('id_consignee')->nullable();
            $table->string('ConsigneeCode', 20)->nullable();
            $table->string('PICName', 50)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfDeliveryOrder', 10)->nullable();
            $table->string('TimeOfDeliveryOrder', 5)->nullable();
            $table->integer('PrintNumber')->default(0);
            $table->bigInteger('id_invoice')->default(0);
            $table->string('invoicenumber', 20)->nullable();
            $table->string('ShiftCode', 1)->nullable();
            $table->string('DateOfOut', 10)->nullable();
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
        Schema::dropIfExists('inc_deliorderheader');
    }
}
