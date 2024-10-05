<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConfigurationTpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configuration_tps', function (Blueprint $table) {
            $table->integer('id_tps')->nullable();
            $table->string('tps_name', 50)->nullable();
            $table->string('tps_region', 50)->nullable();
            $table->string('kode_tps', 50)->nullable();
            $table->string('no_ijin', 50)->nullable();
            $table->integer('tgl_ijin')->nullable();
            $table->integer('is_active')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('configuration_tps');
    }
}
