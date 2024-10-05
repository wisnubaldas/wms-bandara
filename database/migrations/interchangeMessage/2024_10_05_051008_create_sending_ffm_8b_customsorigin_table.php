<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFfm8bCustomsoriginTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_ffm_8b_customsorigin', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('CustomsOriginCode', 2)->nullable();
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
        Schema::dropIfExists('sending_ffm_8b_customsorigin');
    }
}
