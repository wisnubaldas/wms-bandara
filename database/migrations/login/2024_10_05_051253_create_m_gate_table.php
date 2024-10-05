<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMGateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gate', function (Blueprint $table) {
            $table->increments('_id');
            $table->string('kd_Gate', 4)->nullable()->index('kd_Gudang');
            $table->string('Nama_Gate', 50)->nullable();
            $table->boolean('Active')->default(1);
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('m_gate');
    }
}
