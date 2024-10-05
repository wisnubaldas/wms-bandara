<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstGudangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_gudang', function (Blueprint $table) {
            $table->increments('noid');
            $table->string('kd_Gudang', 4)->nullable()->index('kd_Gudang');
            $table->string('Nama_Gudang', 50)->nullable();
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
        Schema::dropIfExists('mst_gudang');
    }
}
