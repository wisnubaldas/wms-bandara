<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTGudangTpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_gudang_tps', function (Blueprint $table) {
            $table->integer('id_tps');
            $table->string('tps_name', 100)->nullable();
            $table->string('tps_region', 200)->nullable();
            $table->string('kode_gudang', 5)->nullable();
            $table->string('kode_tps', 45)->nullable();
            $table->string('no_ijin', 50)->nullable();
            $table->string('tgl_ijin', 10)->nullable();
            $table->string('config_db', 50);
            $table->boolean('is_active')->nullable();

            $table->primary(['id_tps', 'config_db']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_gudang_tps');
    }
}
