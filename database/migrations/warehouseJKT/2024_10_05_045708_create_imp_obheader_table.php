<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpObheaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_obheader', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('BreakdownNumber', 20);
            $table->string('WhOperatorCode', 5)->nullable()->index('WhOperatorCode');
            $table->string('DateOfOveride', 10)->nullable()->index('DateOfOveride');
            $table->string('DateOfArrival', 10)->nullable();
            $table->string('TimeOfArrival', 8)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('OperatorName', 25)->nullable();
            $table->integer('TotalMasterAWB')->nullable();
            $table->integer('TotalPieces')->nullable();
            $table->decimal('TotalNetto', 10, 1)->nullable();
            $table->decimal('TotalCAW', 10, 1)->nullable();
            $table->string('Supervisor', 50)->nullable();
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
        Schema::dropIfExists('imp_obheader');
    }
}
