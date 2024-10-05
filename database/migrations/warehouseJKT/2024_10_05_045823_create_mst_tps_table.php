<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstTpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_tps', function (Blueprint $table) {
            $table->increments('Noid');
            $table->string('kd_tps', 4)->nullable()->index('kd_tps');
            $table->string('kd_gudang', 4)->nullable()->index('kd_gudang');
            $table->string('kd_kbpc', 6)->nullable();
            $table->integer('asAsal')->default(1);
            $table->integer('void')->default(0);
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
        Schema::dropIfExists('mst_tps');
    }
}
