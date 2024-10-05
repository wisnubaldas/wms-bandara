<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginuserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginuser', function (Blueprint $table) {
            $table->string('EmployeeNumber', 10)->primary();
            $table->string('EmployeeName', 50)->nullable();
            $table->string('PlaceOfBirth', 25)->nullable();
            $table->string('DateofBirth', 10)->nullable();
            $table->string('StartJoin', 10)->nullable();
            $table->string('Address', 50)->nullable();
            $table->string('Address_2', 50)->nullable();
            $table->string('Mobilephone', 15)->nullable();
            $table->string('email', 50)->nullable();
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
        Schema::dropIfExists('loginuser');
    }
}
