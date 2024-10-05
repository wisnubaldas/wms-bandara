<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTaxTransactionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tax_transaction', function (Blueprint $table) {
            $table->bigInteger('noid')->index()->primary();
            $table->string('FakturNumber', 19)->nullable();
            $table->string('InvoiceNumber', 21)->nullable();
            $table->string('DateOfFaktur', 10)->nullable();
            $table->string('TimeOfFaktur', 8)->nullable();
            $table->string('CustomerCode', 19)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfReport', 10)->nullable();
            $table->string('NPWP', 25)->nullable();
            $table->string('DateOfNPWP', 25)->nullable();
            $table->string('RemarksFaktur', 100)->nullable();
            $table->integer('TotalPieces')->nullable();
            $table->decimal('TotalCAW', 10, 2)->nullable();
            $table->decimal('TotalWarehouseFee', 13, 2)->nullable();
            $table->decimal('TotalAssistancyFee', 13, 2)->nullable();
            $table->decimal('TotalStorageFee', 13, 2)->nullable();
            $table->decimal('TotalAdminFee', 13, 2)->nullable();
            $table->decimal('TotalOthersFee', 13, 2)->nullable();
            $table->decimal('TotalAirportContriFee', 13, 2)->default(0.00);
            $table->decimal('Totalpecahpos', 13, 2)->default(0.00);
            $table->decimal('TotalSub', 13, 2)->nullable();
            $table->decimal('TotalTax', 13, 2)->nullable();
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('tax_transaction');
    }
}
