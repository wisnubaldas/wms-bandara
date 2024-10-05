<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlpNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plp_number', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('mawb', 40);
            $table->string('hawb', 40);
            $table->string('plp', 10);
            $table->timestamp('date')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plp_number');
    }
}
