<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXinventoryMasterwaybillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xinventory_masterwaybill', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('MasterAWB', 11);
            $table->decimal('Pieces', 18, 0)->nullable();
            $table->decimal('Weight', 18, 0)->nullable();
            $table->decimal('Volume', 18, 0)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('FlightNo', 5)->nullable();
            $table->string('Origin', 3)->nullable();
            $table->string('Destination', 3)->nullable();
            $table->string('DateOfFight', 10)->nullable();
            $table->string('KindOfGood', 25)->nullable();
            $table->string('KindOfCode', 5)->nullable();
            $table->string('HSCode', 5)->nullable();
            $table->string('AgenCode', 19)->nullable();
            $table->string('ShipperCode', 19)->nullable();
            $table->string('ConsigneeCode', 19)->nullable();
            $table->string('bc11', 6)->nullable();
            $table->string('tglbc11', 10)->nullable();
            $table->string('nopos', 12)->nullable();
            $table->string('PLP', 6)->nullable();
            $table->string('tglPLP', 10)->nullable();
            $table->string('Multihost', 1)->nullable();
            $table->string('Parsial', 1)->nullable();
            $table->string('DateOfOut', 10)->nullable();
            $table->string('TimeOut', 5)->nullable();
            $table->string('DateOfIn', 10)->nullable();
            $table->string('TimeIn', 5)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->default('12345');
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
        Schema::dropIfExists('xinventory_masterwaybill');
    }
}
