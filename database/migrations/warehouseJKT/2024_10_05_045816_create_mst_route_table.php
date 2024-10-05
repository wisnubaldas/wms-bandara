<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstRouteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_route', function (Blueprint $table) {
            $table->bigInteger('Noid')->primary();
            $table->string('TwoLetterCode', 2)->nullable();
            $table->string('FlightNumber', 6)->nullable();
            $table->string('OriginCode', 5)->nullable();
            $table->string('DestinationCode', 5)->nullable();
            $table->string('Route', 7)->nullable();
            $table->string('WarehouseCode', 5)->nullable();
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
        Schema::dropIfExists('mst_route');
    }
}
