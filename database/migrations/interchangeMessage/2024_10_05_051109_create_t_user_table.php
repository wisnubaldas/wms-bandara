<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_user', function (Blueprint $table) {
            $table->bigInteger('id_user')->primary();
            $table->string('userID', 15)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('userpassword', 50)->nullable();
            $table->string('mobilephone', 20)->nullable();
            $table->enum('typeuser', ['1', '2', '3'])->nullable()->comment("1=Airlines,2=user,3=Admin");
            $table->string('airlines_code', 2)->nullable();
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_user');
    }
}
