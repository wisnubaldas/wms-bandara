<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstDiscrepancyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_discrepancy', function (Blueprint $table) {
            $table->integer('Noid')->primary();
            $table->string('DiscrepancyCode', 4)->nullable();
            $table->string('DiscrepancyName', 30)->nullable();
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
        Schema::dropIfExists('mst_discrepancy');
    }
}
