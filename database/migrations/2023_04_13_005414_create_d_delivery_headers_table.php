<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_delivery_headers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('h_delivery_headers_id');
            $table->bigInteger('h_breakdowns_id');
            $table->string('mawb');
            $table->string('host');
            $table->string('parsial');
            $table->bigInteger('airlines_id');
            $table->bigInteger('flights_id');
            $table->bigInteger('origins_id');
            $table->integer('pieces');
            $table->integer('netto');
            $table->integer('volume');
            $table->string('kind_of_good');
            $table->string('kind_of_code');
            $table->boolean('strong_room')->default(0);
            $table->boolean('dg')->default(0);
            $table->string('location');
            $table->string('awd');
            $table->boolean('void')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('d_delivery_headers');
    }
};
