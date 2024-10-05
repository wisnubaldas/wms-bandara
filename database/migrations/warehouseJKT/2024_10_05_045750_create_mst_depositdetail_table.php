<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstDepositdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_depositdetail', function (Blueprint $table) {
            $table->bigInteger('Noid')->primary();
            $table->string('WarehouseCode', 5)->nullable()->index('WarehouseCode');
            $table->string('DepositCode', 20)->nullable()->index('DepositCode');
            $table->string('DateOfTransaction', 10)->nullable()->index('DateOfTransaction');
            $table->string('TimeOfTransaction', 10)->nullable()->index('TimeOfEntry');
            $table->string('Description', 50)->nullable();
            $table->string('DepositType', 1)->nullable()->index('DepositType');
            $table->string('InvoiceNumber', 18)->nullable();
            $table->string('DateOfEntry', 10)->nullable()->index('DateOfEntry');
            $table->string('TimeOfEntry', 10)->nullable();
            $table->double('DepositNominal')->nullable();
            $table->integer('void')->default(0);
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
        Schema::dropIfExists('mst_depositdetail');
    }
}
