<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFareMinchangesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_minchanges', function (Blueprint $table) {
            $table->bigInteger('noid')->index('ix_MasterMinimumCharges_autoinc');
            $table->string('WareHouseCode', 1)->nullable();
            $table->string('DescriptionValue', 50)->nullable();
            $table->decimal('MinimumValue', 18, 0)->nullable();
            $table->string('DateFrom', 10)->nullable();
            $table->string('DateUntil', 10)->nullable();
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
        Schema::dropIfExists('fare_minchanges');
    }
}
