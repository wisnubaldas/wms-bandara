<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetbc14SppbKmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getbc14_sppb_kms', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('CAR', 26)->nullable();
            $table->string('JNS_KMS', 2)->nullable();
            $table->integer('JML_KMS')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('getbc14_sppb_kms');
    }
}
