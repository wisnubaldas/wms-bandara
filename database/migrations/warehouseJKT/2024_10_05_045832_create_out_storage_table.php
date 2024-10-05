<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_storage', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('StorageNumber', 10)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->string('origin', 3)->nullable();
            $table->string('DestinationCode', 3)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->integer('PartOfPieces')->nullable();
            $table->integer('Pieces')->nullable();
            $table->decimal('PartOfNetto', 12, 2)->nullable();
            $table->decimal('Netto', 10, 2)->nullable();
            $table->decimal('Volume', 10, 2)->nullable();
            $table->string('Location', 20)->nullable();
            $table->string('KindOfgood', 30)->nullable();
            $table->boolean('Delivery')->default(0);
            $table->string('Remarks', 30)->nullable();
            $table->string('token', 5)->nullable();
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
            $table->timestamp('modify_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('out_storage');
    }
}
