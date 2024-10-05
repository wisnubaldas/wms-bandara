<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstPaymentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_payment', function (Blueprint $table) {
            $table->integer('Noid')->index()->primary();
            $table->string('PaymentCode', 1)->nullable();
            $table->string('PaymentName', 15)->nullable();
            $table->integer('Void')->default(0);
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
        Schema::dropIfExists('mst_payment');
    }
}
