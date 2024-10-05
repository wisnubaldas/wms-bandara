<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtFormDisplayFunctionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_form_display_function', function (Blueprint $table) {
            $table->integer('_id')->index('_id');
            $table->integer('_id_m_form_display');
            $table->string('kd_akses', 50)->nullable();
            $table->boolean('_visible')->default(1);
            $table->boolean('_enable')->default(1);
            $table->boolean('_insert')->default(0);
            $table->boolean('_update')->default(0);
            $table->boolean('_void')->default(0);
            $table->boolean('_find')->default(0);
            $table->boolean('_delete')->default(0);
            $table->boolean('_print')->default(0);
            $table->boolean('_download')->default(0);
            $table->boolean('_upload')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mt_form_display_function');
    }
}
