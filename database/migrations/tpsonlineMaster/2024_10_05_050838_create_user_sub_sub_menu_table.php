<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserSubSubMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_sub_sub_menu', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->integer('sub_menu_id')->nullable();
            $table->text('title')->nullable();
            $table->text('url')->nullable();
            $table->integer('is_active')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_sub_sub_menu');
    }
}
