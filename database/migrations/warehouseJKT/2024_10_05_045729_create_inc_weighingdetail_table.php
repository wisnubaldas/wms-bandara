<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncWeighingdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_weighingdetail', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->bigInteger('id_header');
            $table->string('ProofNumber', 20)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->integer('Pieces')->nullable();
            $table->integer('Pallet')->nullable();
            $table->integer('LengthOfCargo')->nullable();
            $table->integer('WidthOfCargo')->nullable();
            $table->integer('TallOfCargo')->nullable();
            $table->decimal('Gross', 12, 2)->nullable();
            $table->decimal('Netto', 12, 2)->nullable();
            $table->decimal('Volume', 12, 2)->nullable();
            $table->decimal('CAW', 12, 2)->nullable();
            $table->string('KindOfgood', 30)->nullable();
            $table->string('StorageRoom', 2)->nullable();
            $table->string('DG', 2)->nullable();
            $table->integer('OverStay')->default(1);
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('OriginCode', 6)->nullable();
            $table->string('DestinasiCode', 6)->nullable();
            $table->string('FlightNumber', 8)->nullable();
            $table->string('DateOfArrival', 10)->nullable();
            $table->string('TimeOfArrival', 5)->nullable();
            $table->bigInteger('id_breakdown')->nullable();
            $table->string('BreakdownNumber', 18)->nullable();
            $table->string('DateOfBreakdown', 10)->nullable();
            $table->string('Location', 20)->nullable();
            $table->unsignedTinyInteger('void')->default(0);
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
        Schema::dropIfExists('inc_weighingdetail');
    }
}
