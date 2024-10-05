<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogintpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logintps', function (Blueprint $table) {
            $table->integer('noid')->primary();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('TPScode', 5)->nullable();
            $table->string('datefrom', 10)->nullable();
            $table->string('dateuntil', 10)->nullable();
            $table->boolean('void')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logintps');
    }
}
