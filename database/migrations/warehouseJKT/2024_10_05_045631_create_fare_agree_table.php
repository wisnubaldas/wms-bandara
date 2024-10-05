<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFareAgreeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fare_agree', function (Blueprint $table) {
            $table->bigInteger('noid')->index()->primary();
            $table->string('WarehouseCode', 5)->nullable();
            $table->string('AgreementCode', 8)->nullable();
            $table->string('DescriptionAgreement', 50)->nullable();
            $table->string('DateAgreement', 10)->nullable();
            $table->string('Active', 1)->nullable();
            $table->integer('void')->default(0);
            $table->string('kd_gudang', 4)->nullable();
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
        Schema::dropIfExists('fare_agree');
    }
}
