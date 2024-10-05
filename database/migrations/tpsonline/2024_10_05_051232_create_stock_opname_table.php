<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStockOpnameTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_opname', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('location_id')->nullable();
            $table->string('location', 100)->nullable();
            $table->string('warehouse_code', 20)->nullable();
            $table->string('hawb', 50)->nullable()->index('email');
            $table->date('scan_date')->nullable();
            $table->time('time')->nullable();
            $table->integer('user')->nullable();
            $table->string('username', 100)->nullable();
            $table->timestamp('date_created')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_opname');
    }
}
