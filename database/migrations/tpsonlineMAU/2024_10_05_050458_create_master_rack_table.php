<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasterRackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('master_rack', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('location', 100)->nullable();
            $table->string('warehouse_code', 20)->nullable();
            $table->string('desc')->nullable()->index('email');
            $table->integer('user')->nullable();
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
        Schema::dropIfExists('master_rack');
    }
}
