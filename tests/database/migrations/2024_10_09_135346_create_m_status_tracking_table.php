<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMStatusTrackingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('m_status_tracking', function (Blueprint $table) {
            $table->integer('_id')->primary();
            $table->string('proses_type', 20)->nullable();
            $table->integer('urutan_status')->nullable();
            $table->string('status_kode', 5)->nullable();
            $table->string('status_name')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('m_status_tracking');
    }
}
