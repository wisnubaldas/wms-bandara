<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMtTpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mt_tps', function (Blueprint $table) {
            $table->integer('_id')->index('_id');
            $table->string('kd_tps', 5)->default('');
            $table->string('nama_tps', 50)->default('');
            $table->string('npwp_tps', 20)->nullable();
            $table->string('plppassword', 30)->default('');
            $table->string('gatepassword', 30)->default('');
            $table->string('TPSportname', 5)->nullable();
            $table->unsignedTinyInteger('active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mt_tps');
    }
}
