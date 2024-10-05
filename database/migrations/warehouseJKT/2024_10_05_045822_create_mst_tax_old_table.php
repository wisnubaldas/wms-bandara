<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstTaxOldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_tax_old', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('taxnumber', 35)->nullable()->index('taxnumber');
            $table->string('invoicenumber', 25)->nullable()->index('invoicenumber');
            $table->string('warehouse_npwp', 25)->nullable();
            $table->string('DateEntry', 10)->nullable()->index('DateEntry');
            $table->string('TimeEntry', 8)->nullable();
            $table->string('DateUpdate', 10)->nullable();
            $table->string('TimeUpdate', 8)->nullable();
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
        Schema::dropIfExists('mst_tax_old');
    }
}
