<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCiSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ci_sessions', function (Blueprint $table) {
            $table->string('id', 40)->primary();
            $table->string('ip_address', 45);
            $table->integer('timestamp')->index('ci_sessions_timestamp');
            $table->binary('data');
            $table->timestamp('created_date')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ci_sessions');
    }
}
