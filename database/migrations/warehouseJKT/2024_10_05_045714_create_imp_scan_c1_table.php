<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpScanC1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_scan_c1', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('bagnumber', 30)->nullable();
            $table->string('hawb', 20)->nullable()->index('hawb');
            $table->string('tracking', 30)->nullable()->index('tracking');
            $table->string('dateofscan', 10)->nullable();
            $table->string('timeofscan', 8)->nullable();
            $table->string('typescan', 15)->nullable();
            $table->boolean('fl_gate')->default(0)->index('fl_gate');
            $table->string('token', 5)->nullable()->index('token');
            $table->string('time_out', 30)->nullable();
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
        Schema::dropIfExists('imp_scan_c1');
    }
}
