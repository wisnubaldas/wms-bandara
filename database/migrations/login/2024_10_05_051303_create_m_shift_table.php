<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMShiftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_shift', function (Blueprint $table) {
            $table->integer('_id')->index()->primary();
            $table->string('ShiftName', 10)->nullable();
            $table->string('TimeFrom', 10)->nullable();
            $table->string('TimeUntil', 10)->nullable();
            $table->integer('Void')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_shift');
    }
}
