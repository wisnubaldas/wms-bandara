<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpDeliorderheaderCopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_deliorderheader_copy', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('DONumber', 20)->default('')->index('DONumber');
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('bc11', 6)->nullable();
            $table->string('tglbc11', 10)->nullable();
            $table->string('nopos', 12)->nullable();
            $table->integer('TotalPieces')->nullable();
            $table->decimal('TotalNetto', 10, 2)->nullable();
            $table->decimal('TotalVolume', 10, 2)->nullable();
            $table->string('ConsigneeCode', 19)->nullable();
            $table->string('PICName', 50)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfDeliveryOrder', 10)->nullable()->index('DateOfDeliveryOrder');
            $table->string('TimeOfDeliveryOrder', 8)->nullable();
            $table->boolean('PrintNumber')->default(0);
            $table->string('InvoiceNumber', 20)->nullable()->index('InvoiceNumber');
            $table->string('ShiftCode', 5)->nullable();
            $table->string('ClearanceType', 10)->nullable();
            $table->string('Nondoc', 1)->nullable();
            $table->string('DateOfOut', 16)->nullable();
            $table->boolean('flagPOD')->default(0);
            $table->boolean('void')->default(0)->index('void');
            $table->string('token', 5)->nullable()->index('token');
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
        Schema::dropIfExists('imp_deliorderheader_copy');
    }
}
