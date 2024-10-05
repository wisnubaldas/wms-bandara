<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTLogApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_log_api', function (Blueprint $table) {
            $table->bigInteger('idapi_log')->primary();
            $table->string('api_key')->nullable();
            $table->dateTime('datetime')->nullable();
            $table->text('url')->nullable();
            $table->text('headers')->nullable();
            $table->longText('body_message')->nullable();
            $table->longText('return')->nullable();
            $table->string('ipaccess', 45)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_log_api');
    }
}
