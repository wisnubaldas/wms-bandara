<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksStorageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_storage', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('StorageNumber', 10)->nullable()->index('StorageNumber');
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('DestinationCode', 3)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('DateOfFlight', 10)->nullable()->index('DateOfFlight');
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->integer('PartOfPieces')->nullable();
            $table->integer('Pieces')->nullable();
            $table->double('PartOfNetto', 18, 0)->nullable();
            $table->double('Netto', 18, 0)->nullable();
            $table->double('Volume', 18, 0)->nullable();
            $table->string('Location', 20)->nullable();
            $table->string('KindOfGood', 30)->nullable();
            $table->integer('Delivery')->default(0);
            $table->string('Remarks', 30)->nullable();
            $table->string('DateEntry', 10)->nullable()->index('DateEntry');
            $table->string('TimeEntry', 8)->nullable()->index('TimeEntry');
            $table->string('token', 5)->nullable()->index('token');
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
        Schema::dropIfExists('eks_storage');
    }
}
