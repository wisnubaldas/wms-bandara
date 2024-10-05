<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_location', function (Blueprint $table) {
            $table->bigInteger('Noid')->index('ix_MasterLocation_autoinc');
            $table->string('WarehouseCode', 5)->nullable();
            $table->string('LocationCode', 20)->nullable();
            $table->string('LocationName', 20)->nullable();
            $table->integer('Void')->default(0);
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
        Schema::dropIfExists('mst_location');
    }
}
