<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTInvoiceHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_invoice_header', function (Blueprint $table) {
            $table->bigInteger('id_invoice')->primary();
            $table->string('Invoice_no', 15);
            $table->string('airlines_code', 2)->nullable();
            $table->date('date_invoice')->nullable();
            $table->decimal('total_fee', 10, 0)->nullable();
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_invoice_header');
    }
}
