<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstOperatorwrhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_operatorwrh', function (Blueprint $table) {
            $table->integer('Noid')->index('ix_MasterOperatorWarehouse_autoinc');
            $table->string('WHOperatorCode', 5)->nullable();
            $table->string('WHOperatorName', 50)->nullable();
            $table->integer('Void')->default(0);
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
        Schema::dropIfExists('mst_operatorwrh');
    }
}
