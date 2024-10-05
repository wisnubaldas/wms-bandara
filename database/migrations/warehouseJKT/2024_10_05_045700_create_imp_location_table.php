<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpLocationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_location', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('OriginCode', 6)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('Parsial', 1)->nullable();
            $table->string('HostAWB', 25)->nullable()->index('HostAWB');
            $table->integer('Pieces')->nullable();
            $table->double('Netto')->nullable();
            $table->string('KindOfCode', 5)->nullable();
            $table->string('KindOfGood', 50)->nullable();
            $table->string('StorageRoom', 2)->nullable();
            $table->string('Location', 15)->nullable();
            $table->string('Additional', 15)->nullable();
            $table->string('DateOfLocation', 10)->nullable()->index('DateOfLocation');
            $table->string('TimeOfLocation', 8)->nullable();
            $table->string('BreakdownNumber', 18)->nullable();
            $table->string('DeliveryOrderNumber', 18)->nullable();
            $table->string('TravelNumber', 18)->nullable();
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('imp_location');
    }
}
