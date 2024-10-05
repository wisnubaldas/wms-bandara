<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLoginnumberingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('loginnumbering', function (Blueprint $table) {
            $table->increments('noid');
            $table->string('DescriptionCode', 45);
            $table->unsignedInteger('QueveNumber');
            $table->string('ConstantKey', 10);
            $table->string('Totaldigit', 45);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('loginnumbering');
    }
}
