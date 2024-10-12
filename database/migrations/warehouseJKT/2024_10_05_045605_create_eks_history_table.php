<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksHistoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_history', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('DateOfHistory', 10)->nullable();
            $table->string('TimeOfHistory', 8)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('FormName', 100)->nullable();
            $table->string('ActionDescription', 100)->nullable();
            $table->string('NumberCode', 20)->nullable();
            $table->string('token', 5)->nullable();
            $table->timestamp('created_at')->default('current_timestamp()');

            $table->index(['DateOfHistory', 'TimeOfHistory'], 'DatetimeHistory');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eks_history');
    }
}
