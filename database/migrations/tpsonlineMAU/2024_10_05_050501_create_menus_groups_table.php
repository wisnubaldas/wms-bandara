<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenusGroupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menus_groups', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('groups_id')->index('groups_id_2');
            $table->unsignedInteger('menus_id')->index('menus_id_2');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menus_groups');
    }
}
