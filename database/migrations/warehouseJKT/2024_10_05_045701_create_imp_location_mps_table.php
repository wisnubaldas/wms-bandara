<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpLocationMpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_location_mps', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('HostAWB', 25)->nullable()->index('HostAWB');
            $table->string('mps', 25)->nullable()->index('mps');
            $table->string('Location', 25)->nullable();
            $table->string('scandate', 10)->nullable();
            $table->string('scantime', 8)->nullable();
            $table->string('token', 5)->nullable()->index('token');
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
        Schema::dropIfExists('imp_location_mps');
    }
}
