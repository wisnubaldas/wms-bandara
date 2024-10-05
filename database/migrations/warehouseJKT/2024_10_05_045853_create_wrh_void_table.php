<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWrhVoidTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wrh_void', function (Blueprint $table) {
            $table->bigInteger('noid')->index()->primary();
            $table->string('NumberCode', 21)->nullable();
            $table->string('NumberShow', 25)->nullable();
            $table->string('NumberRef', 20)->nullable();
            $table->string('DateOfRequest', 10)->nullable();
            $table->string('TimeOfRequest', 8)->nullable();
            $table->string('UserIDRequest', 10)->nullable();
            $table->string('ReasonVoid', 200)->nullable();
            $table->string('TableName', 75)->nullable();
            $table->string('EmployeeNumber', 45)->nullable();
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
        Schema::dropIfExists('wrh_void');
    }
}
