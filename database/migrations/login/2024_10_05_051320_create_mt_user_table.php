<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_user', function (Blueprint $table) {
            $table->integer('_id')->index('_id');
            $table->string('EmployeeNumber', 10)->primary();
            $table->string('EmployeeName', 50)->nullable();
            $table->string('StartJoin', 10)->nullable();
            $table->string('Mobilephone', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('kd_Operator', 5)->nullable();
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
        Schema::dropIfExists('mt_user');
    }
}
