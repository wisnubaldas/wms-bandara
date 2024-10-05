<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTbModetilMessageCargoimpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_modetil_message_cargoimp', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->integer('_id_model_mess_cargoimp')->nullable();
            $table->integer('_id_title_message')->nullable();
            $table->enum('status_mandatory', ['M', 'O', 'C'])->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_modetil_message_cargoimp');
    }
}
