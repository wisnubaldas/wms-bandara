<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('parent')->nullable();
            $table->string('name', 50);
            $table->string('icon', 30);
            $table->string('slug', 50);
            $table->integer('number');
            $table->dateTime('create_at')->nullable();
            $table->dateTime('update_at')->nullable();
            
            $table->foreign('parent', 'menus_ibfk_1')->references('id')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus');
    }
}
