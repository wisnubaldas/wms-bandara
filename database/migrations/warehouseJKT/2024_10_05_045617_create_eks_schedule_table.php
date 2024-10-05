<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksScheduleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_schedule', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('Flight', 5)->nullable();
            $table->string('Route', 6)->nullable();
            $table->char('TimeDeparture', 5)->nullable();
            $table->float('Capacity')->nullable();
            $table->integer('SundayB')->default(0);
            $table->integer('mondayB')->default(0);
            $table->integer('TuesdayB')->default(0);
            $table->integer('WednesdayB')->default(0);
            $table->integer('ThursdayB')->default(0);
            $table->integer('FridayB')->default(0);
            $table->integer('SaturdayB')->default(0);
            $table->integer('Active')->default(0);
            $table->string('token', 5)->nullable()->index('token');
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
        Schema::dropIfExists('eks_schedule');
    }
}
