<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpDeliorderdetailCopyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_deliorderdetail_copy', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('DONumber', 20)->nullable()->index('DONumber');
            $table->string('BreakdownNumber', 20)->nullable();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->char('Parsial', 10)->nullable();
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('FlightNumber', 5)->nullable()->index('FlightNumber');
            $table->string('OriginCode', 6)->nullable();
            $table->string('DateOfBreakdown', 10)->nullable()->index('DateOfBreakdown');
            $table->string('HostMAWB', 25)->nullable()->index('HostMAWB');
            $table->integer('Pieces')->nullable();
            $table->decimal('Netto', 10, 2)->nullable();
            $table->decimal('Volume', 10, 2)->nullable();
            $table->string('KindOfCode', 20)->nullable();
            $table->string('KindOfGood', 50)->nullable();
            $table->string('StorageRoom', 2)->nullable();
            $table->string('DG', 2)->nullable();
            $table->string('Location', 15)->nullable();
            $table->boolean('AWD')->default(0);
            $table->boolean('void')->default(0);
            $table->string('token', 8)->nullable();
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
        Schema::dropIfExists('imp_deliorderdetail_copy');
    }
}
