<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstDepositnominalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_depositnominal', function (Blueprint $table) {
            $table->integer('noid')->primary();
            $table->string('DepositCode', 20);
            $table->string('WarehouseCode', 5)->nullable();
            $table->double('NominalDeposit')->nullable();
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
        Schema::dropIfExists('mst_depositnominal');
    }
}
