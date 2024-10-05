<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFareActivedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_actived', function (Blueprint $table) {
            $table->bigInteger('noid')->index('ix_FareActived_autoinc');
            $table->string('WarehouseCode', 1)->nullable();
            $table->string('AgreementCode', 5)->nullable();
            $table->integer('SequenceNumb')->nullable();
            $table->string('ItemCode', 5)->nullable();
            $table->integer('Actived')->default(1);
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
        Schema::dropIfExists('fare_actived');
    }
}
