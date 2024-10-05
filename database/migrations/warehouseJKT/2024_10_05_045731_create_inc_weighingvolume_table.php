<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncWeighingvolumeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_weighingvolume', function (Blueprint $table) {
            $table->bigInteger('_id')->default(0);
            $table->bigInteger('id_header')->nullable();
            $table->string('ProofNumber', 20)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->integer('Pieces')->nullable();
            $table->integer('LongCargo')->nullable();
            $table->integer('WidthCargo')->nullable();
            $table->integer('HighCargo')->nullable();
            $table->decimal('VolumeCargo', 8, 2)->nullable();
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
        Schema::dropIfExists('inc_weighingvolume');
    }
}
