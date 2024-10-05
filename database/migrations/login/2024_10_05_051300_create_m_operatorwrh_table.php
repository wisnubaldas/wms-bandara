<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMOperatorwrhTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_operatorwrh', function (Blueprint $table) {
            $table->integer('_id')->index('ix_MasterOperatorWarehouse_autoinc');
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
        Schema::dropIfExists('m_operatorwrh');
    }
}
