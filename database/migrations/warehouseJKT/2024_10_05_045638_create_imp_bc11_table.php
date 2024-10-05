<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpBc11Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_bc11', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->decimal('NomorPos', 18, 0)->nullable();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->integer('Pieces')->nullable();
            $table->double('Netto', 18, 0)->nullable();
            $table->string('KindOfGood', 50)->nullable();
            $table->string('Route', 6)->nullable();
            $table->string('FlightNumber', 7)->nullable();
            $table->string('BCNumber', 6)->nullable();
            $table->string('DateOfBC', 10)->nullable();
            $table->string('nopos', 4)->nullable();
            $table->string('subpos', 4)->nullable();
            $table->string('subsubpos', 4)->nullable();
            $table->string('TypeClearance', 5)->default('NONE');
            $table->string('DateEntry', 10)->nullable()->index('DateEntry');
            $table->string('TimeEntry', 8)->nullable()->index('TimeEntry');
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
        Schema::dropIfExists('imp_bc11');
    }
}
