<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetImpSpjmKmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_imp_spjm_kms', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('CAR', 26)->nullable();
            $table->string('JNS_KMS', 2)->nullable();
            $table->string('MERK_KMS', 30)->nullable();
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
        Schema::dropIfExists('get_imp_spjm_kms');
    }
}
