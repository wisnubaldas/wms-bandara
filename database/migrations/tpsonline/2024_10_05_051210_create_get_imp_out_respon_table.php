<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGetImpOutResponTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('get_imp_out_respon', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('respon', 45)->nullable();
            $table->dateTime('create_at')->nullable();
            $table->dateTime('update_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('get_imp_out_respon');
    }
}
