<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_menu', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('menu', 128)->nullable();
            $table->string('controller', 45)->nullable();
            $table->string('icon', 128)->nullable();
            $table->string('url', 128)->nullable();
            $table->integer('is_active')->default(1);
            $table->integer('have_a_child')->nullable();
            $table->string('sort', 3)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_menu');
    }
}
