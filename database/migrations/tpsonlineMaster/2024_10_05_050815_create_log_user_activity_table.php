<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLogUserActivityTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log_user_activity', function (Blueprint $table) {
            $table->string('uuid', 100)->primary();
            $table->string('users', 100);
            $table->string('context', 200);
            $table->string('message', 200);
            $table->text('data')->nullable();
            $table->timestamp('timestamp')->default('current_timestamp()');
            $table->text('token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('log_user_activity');
    }
}
