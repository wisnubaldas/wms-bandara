<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMTaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_tax', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('taxnumber', 35)->nullable();
            $table->string('invoicenumber', 20)->nullable();
            $table->string('warehouse_npwp', 25)->nullable();
            $table->string('DateEntry', 10)->nullable()->index('DateEntry');
            $table->string('TimeEntry', 8)->nullable();
            $table->string('DateUpdate', 10)->nullable();
            $table->string('TimeUpdate', 8)->nullable();
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
        Schema::dropIfExists('m_tax');
    }
}
