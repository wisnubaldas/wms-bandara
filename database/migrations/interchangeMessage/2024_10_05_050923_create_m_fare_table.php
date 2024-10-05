<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMFareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_fare', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('fare_code', 3)->nullable();
            $table->string('fare_name', 50)->nullable();
            $table->bigInteger('values')->nullable();
            $table->date('date_from')->nullable();
            $table->date('date_until')->nullable();
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
        Schema::dropIfExists('m_fare');
    }
}
