<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogindutyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginduty', function (Blueprint $table) {
            $table->unsignedInteger('Noid')->index('Noid');
            $table->string('TPScode', 5)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->string('Datefrom', 10)->nullable();
            $table->string('Dateuntil', 10)->nullable();
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
        Schema::dropIfExists('loginduty');
    }
}
