<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTDokpabDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_dokpab_detail', function (Blueprint $table) {
            $table->bigInteger('id_detail')->primary();
            $table->bigInteger('id_header')->nullable()->index('id_header');
            $table->string('CAR', 100)->nullable()->index('CAR');
            $table->string('JNS_KMS', 10)->nullable();
            $table->string('JML_KMS', 50)->nullable();
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
        Schema::dropIfExists('t_dokpab_detail');
    }
}
