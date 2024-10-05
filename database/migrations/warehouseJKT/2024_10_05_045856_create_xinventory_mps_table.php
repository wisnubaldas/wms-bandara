<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateXinventoryMpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('xinventory_mps', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('HostAWB', 25)->nullable();
            $table->string('mps', 25)->nullable();
            $table->decimal('Weight', 10, 0)->nullable();
            $table->string('Location', 25)->nullable();
            $table->string('scandate', 10)->nullable();
            $table->string('scantime', 8)->nullable();
            $table->string('token', 5)->nullable();
            $table->string('date_in', 10)->nullable();
            $table->string('time_in', 10)->nullable();
            $table->boolean('flag_out')->default(0);
            $table->string('date_out', 10)->nullable();
            $table->string('time_out', 10)->nullable();
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
        Schema::dropIfExists('xinventory_mps');
    }
}
