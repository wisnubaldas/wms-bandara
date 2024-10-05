<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutWeighingdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_weighingdetail', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->bigInteger('id_header')->nullable();
            $table->string('ProofNumber', 20)->nullable();
            $table->string('MasterAWB', 15);
            $table->string('HostAWB', 25)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('origin', 3)->nullable();
            $table->string('Destination', 3)->nullable();
            $table->string('FlightNumber', 7)->nullable();
            $table->integer('Pieces')->nullable();
            $table->integer('Pallet')->nullable();
            $table->decimal('GrossWeight', 8, 2)->nullable();
            $table->decimal('NettoWeight', 8, 2)->nullable();
            $table->integer('LongCargo')->nullable();
            $table->integer('WidthCargo')->nullable();
            $table->integer('HighCargo')->nullable();
            $table->decimal('VolumeCargo', 8, 2)->nullable();
            $table->decimal('NettoSMU', 8, 2)->nullable();
            $table->decimal('CAW', 8, 2)->nullable();
            $table->string('StorageRoom', 2)->nullable();
            $table->string('DG', 1)->nullable();
            $table->string('KindOfCode', 10)->nullable();
            $table->string('KindOfNature', 50)->nullable();
            $table->boolean('BuildUpFlag')->default(0);
            $table->string('BuildupNumber', 18)->nullable();
            $table->bigInteger('id_buildupdetail')->nullable();
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
        Schema::dropIfExists('out_weighingdetail');
    }
}
