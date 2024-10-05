<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpObdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_obdetail', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('BreakdownNumber', 20)->nullable()->index('BreakdownNumber');
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->char('Parsial', 1)->nullable();
            $table->char('PosMaster', 1)->nullable();
            $table->string('TransitCode', 3)->nullable();
            $table->integer('Pieces')->nullable();
            $table->decimal('Netto', 10, 1)->nullable();
            $table->decimal('Volume', 10, 1)->nullable();
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
            $table->boolean('RCF')->default(0);
            $table->boolean('flagInvoice')->default(0);
            $table->boolean('NOA')->default(1);
            $table->integer('sisa')->nullable();
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
        Schema::dropIfExists('imp_obdetail');
    }
}
