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
            $table->integer('id')->primary();
            $table->string('name', 128)->nullable();
            $table->string('email', 128)->nullable()->index('email');
            $table->string('image', 128)->nullable();
            $table->string('password', 256)->nullable()->index('password');
            $table->integer('role_id')->nullable()->comment("1 = OPERATOR, 2 = AIRLINES");
            $table->enum('access_domain', ['1', '2'])->nullable()->comment("1 = MAU, 2 = RA");
            $table->integer('is_active')->nullable()->index('active');
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
