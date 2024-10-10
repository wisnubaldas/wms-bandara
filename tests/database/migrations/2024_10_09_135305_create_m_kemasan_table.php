<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMKemasanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_kemasan', function (Blueprint $table) {
            $table->increments('Noid');
            $table->string('kd_kemasan', 2)->nullable();
            $table->string('nama_kemasan', 50)->nullable();
            $table->boolean('active')->default(0);
            $table->boolean('void')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_kemasan');
    }
}
