<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNomorCwpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_nomor_cwp', function (Blueprint $table) {
            $table->integer('IDnumber')->primary();
            $table->string('ConstantKey', 5)->nullable();
            $table->bigInteger('QueveNumber')->nullable();
            $table->string('DescriptionCode', 50)->nullable()->index('DescriptionCode');
            $table->integer('Totaldigit')->nullable();
            $table->boolean('Active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_nomor_cwp');
    }
}
