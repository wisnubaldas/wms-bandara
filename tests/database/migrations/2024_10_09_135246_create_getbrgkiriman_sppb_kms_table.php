<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetbrgkirimanSppbKmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('getbrgkiriman_sppb_kms', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('CAR', 26)->nullable()->index('CAR');
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
        Schema::dropIfExists('getbrgkiriman_sppb_kms');
    }
}
