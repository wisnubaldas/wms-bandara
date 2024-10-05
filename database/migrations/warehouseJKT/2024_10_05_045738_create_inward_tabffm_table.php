<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInwardTabffmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inward_tabffm', function (Blueprint $table) {
            $table->string('ID', 50);
            $table->string('SAMA', 50)->nullable();
            $table->string('MessageKey', 50)->nullable();
            $table->string('lable', 5)->nullable();
            $table->string('messagecode', 50)->nullable();
            $table->string('transportcode', 2)->nullable();
            $table->string('carriercode', 2)->nullable();
            $table->string('callsign', 10)->nullable();
            $table->string('flag', 2)->nullable();
            $table->string('fightno', 10)->nullable();
            $table->string('portoforigin', 5)->nullable();
            $table->string('portofdischarge', 5)->nullable();
            $table->string('prevport', 5)->nullable();
            $table->string('nextport', 5)->nullable();
            $table->string('arrivedate', 8)->nullable();
            $table->string('arrivetime', 6)->nullable();
            $table->string('cetak', 1)->nullable();
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
        Schema::dropIfExists('inward_tabffm');
    }
}
