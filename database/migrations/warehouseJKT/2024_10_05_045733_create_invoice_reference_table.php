<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInvoiceReferenceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('invoice_reference', function (Blueprint $table) {
            $table->bigInteger('id_')->primary();
            $table->string('invoicenumber', 20)->nullable();
            $table->string('reference_number', 50)->nullable()->index('reference_number');
            $table->text('xml_data')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice_reference');
    }
}
