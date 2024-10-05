<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMClearanceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_clearance', function (Blueprint $table) {
            $table->integer('_id')->primary();
            $table->string('clearance_kd', 10)->nullable();
            $table->string('clearance_name', 75)->nullable();
            $table->string('keterangan', 7)->nullable();
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
        Schema::dropIfExists('m_clearance');
    }
}
