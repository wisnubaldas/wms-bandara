<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->integer('id')->nullable();
            $table->string('name', 128)->nullable();
            $table->string('email', 128)->nullable();
            $table->string('image', 128)->nullable();
            $table->string('password', 256)->nullable();
            $table->string('tps_access', 50)->nullable();
            $table->integer('role_id')->nullable();
            $table->integer('is_active')->nullable();
            $table->integer('date_created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
}
