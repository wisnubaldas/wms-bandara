<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutWeighingvolumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_weighingvolume', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->bigInteger('id_header')->nullable();
            $table->string('ProofNumber', 20)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->string('HostAWB', 25)->nullable();
            $table->integer('Pieces')->nullable();
            $table->integer('LongCargo')->nullable();
            $table->integer('WidthCargo')->nullable();
            $table->integer('HighCargo')->nullable();
            $table->decimal('VolumeCargo', 8, 2)->nullable();
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
        Schema::dropIfExists('out_weighingvolume');
    }
}
