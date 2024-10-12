<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNumberInvoiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_number_invoice', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('nomor_invoice', 18)->nullable();
            $table->boolean('flag_pakai')->default(0)->comment('1=import,2=ekspor,3=outgoing,4=incoming,5=lain-lain');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_number_invoice');
    }
}
