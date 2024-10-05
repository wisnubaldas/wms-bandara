<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveFhl4FreetextdescriptionofgoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_fhl_4_freetextdescriptionofgoods', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('FreeText1', 65)->nullable();
            $table->string('FreeText2', 65)->nullable();
            $table->string('FreeText3', 65)->nullable();
            $table->string('FreeText4', 65)->nullable();
            $table->string('FreeText5', 65)->nullable();
            $table->string('FreeText6', 65)->nullable();
            $table->string('FreeText7', 65)->nullable();
            $table->string('FreeText8', 65)->nullable();
            $table->string('FreeText9', 65)->nullable();
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
        Schema::dropIfExists('receive_fhl_4_freetextdescriptionofgoods');
    }
}
