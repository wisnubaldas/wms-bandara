<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstBeacukaiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_beacukai', function (Blueprint $table) {
            $table->integer('Noid')->primary();
            $table->string('kd_KBPC', 6)->index('kd_KBPC');
            $table->string('Nama_KBPC', 35);
            $table->boolean('active')->default(1);
            $table->string('Kota', 25);
            $table->string('Eselon', 6);
            $table->string('NamaProgram', 3);
            $table->string('Registrasi', 6);
            $table->unsignedTinyInteger('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_beacukai');
    }
}
