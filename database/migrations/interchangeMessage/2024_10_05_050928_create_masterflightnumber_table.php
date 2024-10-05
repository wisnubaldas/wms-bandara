<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterflightnumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masterflightnumber', function (Blueprint $table) {
            $table->integer('NoID')->index('NoID');
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('Route', 6)->nullable();
            $table->string('FlightNumber', 5)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masterflightnumber');
    }
}
