<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMstArrivalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mst_arrival', function (Blueprint $table) {
            $table->bigInteger('Noid')->primary();
            $table->string('TimeArrival', 5)->nullable();
            $table->string('ActualTimeArrival', 5)->nullable();
            $table->string('Arrival', 10)->nullable();
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('FlightNo', 5)->nullable();
            $table->string('AcType', 50)->nullable();
            $table->decimal('PayLoad', 18, 0)->nullable();
            $table->string('Terminal', 50)->nullable();
            $table->string('Remarks', 50)->nullable();
            $table->string('DateOfArrival', 10)->nullable()->index('DateOfArrival');
            $table->string('DateOfEntry', 10)->nullable();
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
        Schema::dropIfExists('mst_arrival');
    }
}
