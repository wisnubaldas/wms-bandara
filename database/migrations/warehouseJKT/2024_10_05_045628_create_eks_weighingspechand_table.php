<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksWeighingspechandTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_weighingspechand', function (Blueprint $table) {
            $table->bigInteger('noid')->index('ix_EksporWeighingProof_SpecialHandling_autoinc');
            $table->string('MasterAWB', 15)->nullable();
            $table->string('HostAWB', 25)->nullable();
            $table->string('SpecialHandling1', 50)->nullable();
            $table->string('SpecialHandling2', 50)->nullable();
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('eks_weighingspechand');
    }
}
