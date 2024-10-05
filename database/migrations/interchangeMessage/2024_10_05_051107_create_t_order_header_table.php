<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTOrderHeaderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_order_header', function (Blueprint $table) {
            $table->bigInteger('id_order')->primary();
            $table->string('order_no', 15)->nullable();
            $table->string('airlines_code', 2)->nullable();
            $table->date('date_order')->nullable();
            $table->string('user_request', 50)->nullable();
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
        Schema::dropIfExists('t_order_header');
    }
}
