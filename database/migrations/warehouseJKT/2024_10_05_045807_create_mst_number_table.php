<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNumberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_number', function (Blueprint $table) {
            $table->integer('IDnumber')->primary();
            $table->string('ConstantKey', 10)->nullable()->index('ConstantKey');
            $table->bigInteger('QueveNumber')->nullable();
            $table->string('DescriptionCode', 50)->nullable()->index('DescriptionCode');
            $table->integer('Totaldigit')->default(5);
            $table->integer('Active')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_number');
    }
}
