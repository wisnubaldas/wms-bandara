<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtJabatanDisplayOprTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_jabatan_display_opr', function (Blueprint $table) {
            $table->integer('_id')->index('_id');
            $table->integer('_id_m_operation')->nullable();
            $table->integer('_id_m_jabatan')->nullable();
            $table->integer('_id_m_form_display_function')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mt_jabatan_display_opr');
    }
}
