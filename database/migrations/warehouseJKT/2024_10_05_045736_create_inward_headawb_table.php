<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInwardHeadawbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inward_headawb', function (Blueprint $table) {
            $table->bigInteger('ID')->primary();
            $table->string('SAMA', 50)->nullable();
            $table->string('FFMID', 50)->nullable();
            $table->string('MessageKey', 50)->nullable();
            $table->string('lable', 5)->nullable();
            $table->string('groupcode', 3)->nullable();
            $table->string('posnum', 4)->nullable();
            $table->string('subpos', 4)->nullable();
            $table->string('Consolidation', 1)->nullable();
            $table->string('PartialShipment', 1)->nullable();
            $table->string('portoforigin', 5)->nullable();
            $table->string('portofloading', 5)->nullable();
            $table->string('portofdischarge', 5)->nullable();
            $table->string('finaldestination', 5)->nullable();
            $table->string('mothervessel', 40)->nullable();
            $table->string('mothercallsign', 10)->nullable();
            $table->string('awbno', 30)->nullable();
            $table->string('awbdate', 8)->nullable();
            $table->string('Mawbno', 30)->nullable();
            $table->string('Mawbdate', 8)->nullable();
            $table->string('weight', 18)->nullable();
            $table->string('Mweight', 18)->nullable();
            $table->string('volume', 18)->nullable();
            $table->string('ContainerName', 50)->nullable();
            $table->string('ContainerNum', 5)->nullable();
            $table->string('PackNum', 8)->nullable();
            $table->string('MContainerNum', 5)->nullable();
            $table->string('MPackNum', 8)->nullable();
            $table->string('EContainerNum', 5)->nullable();
            $table->string('EPackNum', 8)->nullable();
            $table->string('PackCode', 2)->nullable();
            $table->string('cetak', 1)->nullable();
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->nullable()->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inward_headawb');
    }
}
