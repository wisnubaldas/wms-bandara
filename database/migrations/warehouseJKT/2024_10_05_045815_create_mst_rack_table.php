<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstRackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_rack', function (Blueprint $table) {
            $table->integer('Noid')->primary();
            $table->string('WarehouseCode', 5)->nullable();
            $table->string('rack_code', 5)->nullable();
            $table->string('rack_name', 40)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_rack');
    }
}
