<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksWeighingvolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_weighingvol', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('ProofNumber', 18)->nullable()->index('ProofNumber');
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('HostAWB', 25)->nullable()->index('HostAWB');
            $table->integer('Pieces')->nullable();
            $table->integer('LongCargo')->nullable();
            $table->integer('WidthCargo')->nullable();
            $table->integer('HighCargo')->nullable();
            $table->double('VolumeCargo')->nullable();
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
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
        Schema::dropIfExists('eks_weighingvol');
    }
}
