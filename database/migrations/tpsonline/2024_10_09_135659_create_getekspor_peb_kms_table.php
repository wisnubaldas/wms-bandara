<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGeteksporPebKmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getekspor_peb_kms', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->integer('id_header')->nullable();
            $table->string('CAR', 26)->nullable();
            $table->string('JNS_KMS', 2)->nullable();
            $table->string('JML_KMS', 8)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('getekspor_peb_kms');
    }
}
