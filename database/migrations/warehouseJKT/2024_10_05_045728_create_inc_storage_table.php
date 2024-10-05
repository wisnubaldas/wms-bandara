<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_storage', function (Blueprint $table) {
            $table->bigInteger('noid')->index()->primary();
            $table->string('StorageNumber', 10)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->string('DestinationCode', 3)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->decimal('PartOfPieces', 18, 0)->nullable();
            $table->decimal('Pieces', 18, 0)->nullable();
            $table->decimal('PartOfNetto', 18, 0)->nullable();
            $table->decimal('Netto', 18, 0)->nullable();
            $table->decimal('Volume', 18, 0)->nullable();
            $table->string('Location', 20)->nullable();
            $table->string('KindOfGood', 30)->nullable();
            $table->integer('Delivery')->default(0);
            $table->string('Remarks', 30)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('inc_storage');
    }
}
