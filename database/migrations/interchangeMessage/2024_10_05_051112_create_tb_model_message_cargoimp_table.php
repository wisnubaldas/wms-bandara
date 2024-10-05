<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbModelMessageCargoimpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_model_message_cargoimp', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->bigInteger('_id_cargoimp')->nullable();
            $table->integer('_id_title_message')->nullable();
            $table->integer('LineIdentifier')->nullable();
            $table->enum('status_mandatory', ['M', 'O', 'C']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_model_message_cargoimp');
    }
}
