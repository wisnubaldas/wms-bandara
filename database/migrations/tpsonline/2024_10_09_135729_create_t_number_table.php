<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_number', function (Blueprint $table) {
            $table->integer('IDnumber')->primary();
            $table->string('DescriptionCode', 50);
            $table->integer('QueveNumber');
            $table->integer('totaldigit');
            $table->boolean('Active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_number');
    }
}
