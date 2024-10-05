<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpLocationMps2021Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_location_mps_2021', function (Blueprint $table) {
            $table->bigInteger('noid')->default(0);
            $table->string('HostAWB', 25)->nullable();
            $table->string('mps', 25)->nullable();
            $table->string('Location', 25)->nullable();
            $table->string('scandate', 10)->nullable();
            $table->string('scantime', 8)->nullable();
            $table->string('token', 5)->nullable();
            $table->boolean('flag_out')->default(0);
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
        Schema::dropIfExists('imp_location_mps_2021');
    }
}
