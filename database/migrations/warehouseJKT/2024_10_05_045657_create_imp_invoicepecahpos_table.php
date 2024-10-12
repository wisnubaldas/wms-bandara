<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpInvoicepecahposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_invoicepecahpos', function (Blueprint $table) {
            $table->bigInteger('noid');
            $table->string('InvoiceNumber', 21)->nullable();
            $table->string('MasterAWB', 13)->nullable()->index('MasterAWB');
            $table->string('HAWB', 25)->nullable();
            $table->decimal('TotalHost', 18, 0)->nullable();
            $table->float('HostFee')->nullable();
            $table->float('TotalFee')->default(0);
            $table->float('TaxFee')->nullable();
            $table->float('Grandtotal')->nullable();
            $table->string('DateOfTransaction', 10)->index('DateOfTransaction');
            $table->string('TimeOfTransaction', 8)->nullable();
            $table->string('PaymentCode', 1)->nullable();
            $table->string('AgreementCode', 5)->nullable()->index('AgreementCode');
            $table->string('CustomerCode', 19)->nullable();
            $table->string('CustomerPIC', 50)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DRSCNumber', 18)->nullable()->index('DRSCNumber');
            $table->string('referensi', 25)->nullable();
            $table->string('ShiftCode', 5)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable()->index('token');
            $table->timestamp('created_at')->default('current_timestamp()')->index('created_at');
            $table->string('type_inv', 4)->default('POS')->index('type_inv');
            $table->string('TaxNumber', 19)->nullable();

            $table->primary(['noid', 'DateOfTransaction']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imp_invoicepecahpos');
    }
}
