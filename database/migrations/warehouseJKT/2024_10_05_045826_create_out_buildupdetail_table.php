<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutBuildupdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_buildupdetail', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->bigInteger('id_header')->nullable();
            $table->string('BuildupNumber', 20)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->integer('Parsial')->nullable();
            $table->string('TransitCode', 3)->nullable();
            $table->integer('PartPieces')->nullable();
            $table->integer('Pieces')->nullable();
            $table->decimal('PartNetto', 10, 2)->nullable();
            $table->decimal('Netto', 10, 2)->nullable();
            $table->decimal('Volume', 10, 2)->nullable();
            $table->string('UldCardNumber', 15)->nullable();
            $table->string('KindOfgood', 20)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
            $table->bigInteger('id_Agen')->nullable();
            $table->string('agentcode', 20)->nullable();
            $table->string('Kondition', 50)->nullable();
            $table->string('OverLoadCode', 1)->nullable();
            $table->string('DONumber', 18)->nullable();
            $table->string('Remarks', 25)->nullable();
            $table->string('OfficialUse', 25)->nullable();
            $table->boolean('PrintNumber')->default(0);
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
        Schema::dropIfExists('out_buildupdetail');
    }
}
