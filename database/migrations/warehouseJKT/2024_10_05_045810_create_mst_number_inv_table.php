<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstNumberInvTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_number_inv', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('ConstantKey', 5)->nullable();
            $table->bigInteger('QueveNumber')->nullable();
            $table->string('DescriptionCode', 50)->nullable()->index('DescriptionCode');
            $table->integer('Totaldigit')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mst_number_inv');
    }
}
