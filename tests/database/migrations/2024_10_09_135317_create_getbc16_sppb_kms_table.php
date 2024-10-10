<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetbc16SppbKmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getbc16_sppb_kms', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('CAR', 26)->nullable()->index('CAR');
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
        Schema::dropIfExists('getbc16_sppb_kms');
    }
}
