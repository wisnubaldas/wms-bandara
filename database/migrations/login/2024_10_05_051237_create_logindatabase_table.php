<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogindatabaseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('logindatabase', function (Blueprint $table) {
            $table->increments('Noid');
            $table->string('userID', 15)->nullable();
            $table->string('DatabaseName', 45);
            $table->string('EmployeeNumber', 10);
            $table->string('DatabaseCode', 45);
            $table->string('TPScode', 5)->nullable();
            $table->string('DepartmenCode', 3)->nullable();
            $table->unsignedInteger('void')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('logindatabase');
    }
}
