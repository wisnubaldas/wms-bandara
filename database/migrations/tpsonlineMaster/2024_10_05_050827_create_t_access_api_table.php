<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTAccessApiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_access_api', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('idapi_key')->nullable();
            $table->text('token')->nullable();
            $table->text('type_access')->nullable();
            $table->text('api_name')->nullable();
            $table->text('api_key')->nullable();
            $table->text('api_token')->nullable();
            $table->text('party_id')->nullable();
            $table->integer('status')->nullable();
            $table->text('createdate')->nullable();
            $table->text('createby')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_access_api');
    }
}
