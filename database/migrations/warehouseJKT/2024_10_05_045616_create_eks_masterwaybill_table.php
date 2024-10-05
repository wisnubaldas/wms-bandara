<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksMasterwaybillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_masterwaybill', function (Blueprint $table) {
            $table->string('MasterAWB', 15)->primary();
            $table->integer('Pieces')->nullable();
            $table->float('Weight')->nullable();
            $table->float('Volume')->nullable();
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('FlightNo', 7)->nullable();
            $table->string('Origin', 3)->nullable();
            $table->string('Destination', 3)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('KindOfGood', 50)->nullable();
            $table->string('KindOfCode', 6)->nullable();
            $table->string('PENnumber', 6)->nullable();
            $table->string('KTKR', 6)->nullable();
            $table->string('DateOfPen', 10)->nullable();
            $table->string('HSCode', 5)->nullable();
            $table->string('AgenCode', 19)->nullable();
            $table->string('ShipperCode', 19)->nullable();
            $table->string('ConsigneeCode', 19)->nullable();
            $table->string('bc11', 6)->nullable();
            $table->string('tglbc11', 10)->nullable();
            $table->string('nopos', 12)->nullable();
            $table->char('Multihost', 1)->default('0');
            $table->char('Parsial', 1)->default('0');
            $table->string('DateOfOut', 10)->nullable();
            $table->string('TimeOut', 8)->nullable();
            $table->string('DateOfIn', 10)->nullable();
            $table->string('TimeIn', 8)->nullable();
            $table->boolean('RCS')->default(0);
            $table->boolean('FWB')->default(0);
            $table->boolean('PDE')->default(0);
            $table->boolean('Status')->default(0);
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('eks_masterwaybill');
    }
}
