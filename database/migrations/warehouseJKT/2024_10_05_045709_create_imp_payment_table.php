<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_payment', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('payment_no', 20)->nullable();
            $table->string('DeliveryOrderNumber', 20)->nullable();
            $table->string('angka_persen', 10)->nullable();
            $table->string('nilai_invoice', 20)->nullable();
            $table->string('nama_bank', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imp_payment');
    }
}
