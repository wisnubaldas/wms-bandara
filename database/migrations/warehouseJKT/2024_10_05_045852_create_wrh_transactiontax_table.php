<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWrhTransactiontaxTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wrh_transactiontax', function (Blueprint $table) {
            $table->bigInteger('Noid')->index('ix_MasterTransactionTaxation_autoinc');
            $table->string('FakturNumber', 19)->nullable();
            $table->string('InvoiceNumber', 14)->nullable();
            $table->string('DateOfFaktur', 10)->nullable();
            $table->string('TimeOfFaktur', 5)->nullable();
            $table->string('CustomerCode', 19)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfReport', 10)->nullable();
            $table->string('NPWP', 25)->nullable();
            $table->float('TotalTax')->nullable();
            $table->integer('void')->default(0);
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('wrh_transactiontax');
    }
}
