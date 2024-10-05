<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMGserentalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_gserental', function (Blueprint $table) {
            $table->integer('_id')->index()->primary();
            $table->string('EquipmentCode', 12)->nullable();
            $table->float('RentalTarif')->nullable();
            $table->string('CurrencyName', 3)->nullable();
            $table->string('DateFrom', 10)->nullable();
            $table->string('DateUntil', 10)->nullable();
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
        Schema::dropIfExists('m_gserental');
    }
}
