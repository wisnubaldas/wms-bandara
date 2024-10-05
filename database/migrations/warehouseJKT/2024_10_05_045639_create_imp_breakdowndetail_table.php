<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpBreakdowndetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_breakdowndetail', function (Blueprint $table) {
            $table->bigIncrements('noid');
            $table->char('BreakdownNumber', 20)->index('BreakdownNumber');
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->integer('Parsial')->default(0);
            $table->integer('PosMaster')->nullable();
            $table->string('TransitCode', 3)->nullable();
            $table->integer('Pieces')->nullable();
            $table->decimal('Netto', 10, 2)->nullable();
            $table->decimal('Volume', 10, 2)->nullable();
            $table->string('KindOfCode', 5)->nullable();
            $table->string('KindOfGood', 50)->nullable();
            $table->string('UldCardNumber', 15)->nullable();
            $table->string('Remark', 50)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('DateOfBreakdown', 10)->nullable()->index('DateOfBreakdown');
            $table->string('TimeOfBreakdown', 8)->nullable();
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('FlightNumber', 5)->nullable();
            $table->string('OriginCode', 6)->nullable();
            $table->boolean('PrintNumber')->default(0);
            $table->string('LocationCode', 10)->nullable();
            $table->boolean('flagInvoice')->default(0);
            $table->boolean('RCF')->default(0);
            $table->boolean('NOA')->default(1);
            $table->integer('sisa')->nullable();
            $table->boolean('gatein')->default(0);
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('imp_breakdowndetail');
    }
}
