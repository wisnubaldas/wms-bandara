<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutWeighinghandlingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_weighinghandling', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->bigInteger('id_header')->nullable();
            $table->string('ProofNumber', 20)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->string('HostAWB', 25)->nullable();
            $table->string('SpecialHandling1', 50)->nullable();
            $table->string('SpecialHandling2', 50)->nullable();
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
        Schema::dropIfExists('out_weighinghandling');
    }
}
