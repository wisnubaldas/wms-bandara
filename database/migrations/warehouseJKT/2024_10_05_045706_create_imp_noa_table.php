<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpNoaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_noa', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('NOANumber', 20)->nullable()->index('NOANumber');
            $table->string('BreakdownNumber', 20)->nullable()->index('BreakdownNumber');
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->integer('Pieces')->nullable();
            $table->double('Netto', 18, 0)->nullable();
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('FlightNumber', 7)->nullable();
            $table->string('OriginCode', 6)->nullable();
            $table->string('DateOfNOA', 10)->nullable();
            $table->string('TimeOfNOA', 8)->nullable();
            $table->string('ConsigneeCode', 20)->nullable();
            $table->boolean('NFD')->default(0);
            $table->string('EmployeeNumber', 10)->nullable();
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
        Schema::dropIfExists('imp_noa');
    }
}
