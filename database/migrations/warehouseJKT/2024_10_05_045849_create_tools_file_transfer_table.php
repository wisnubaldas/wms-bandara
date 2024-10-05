<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateToolsFileTransferTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tools_file_transfer', function (Blueprint $table) {
            $table->integer('noid')->primary();
            $table->string('warehouseCode', 6)->nullable();
            $table->string('FileName', 35)->nullable();
            $table->string('JudulFile', 30)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable();
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
        Schema::dropIfExists('tools_file_transfer');
    }
}
