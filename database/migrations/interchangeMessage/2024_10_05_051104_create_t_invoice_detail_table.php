<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTInvoiceDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_invoice_detail', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('id_invoice');
            $table->bigInteger('id_order')->nullable();
            $table->string('uld_code', 50)->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_until')->nullable();
            $table->decimal('value_fee', 10, 0)->nullable();
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('t_invoice_detail');
    }
}
