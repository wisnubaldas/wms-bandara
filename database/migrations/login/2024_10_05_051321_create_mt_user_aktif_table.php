<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtUserAktifTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_user_aktif', function (Blueprint $table) {
            $table->increments('_id');
            $table->integer('_id_m_user');
            $table->string('userID', 15);
            $table->string('password', 45);
            $table->string('datefrom', 10);
            $table->string('dateuntil', 10);
            $table->string('ReferenceNumber', 45);
            $table->string('EmployeeNumber', 10)->nullable();
            $table->unsignedTinyInteger('Activation')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mt_user_aktif');
    }
}
