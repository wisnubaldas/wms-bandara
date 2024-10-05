<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIncDeliorderdetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inc_deliorderdetail', function (Blueprint $table) {
            $table->bigInteger('_id')->index()->primary();
            $table->bigInteger('id_header');
            $table->string('DONumber', 18)->nullable();
            $table->bigInteger('id_breakdown')->nullable();
            $table->string('BreakdownNumber', 18)->nullable();
            $table->string('FlightDate', 10)->nullable();
            $table->string('MasterAWB', 15)->nullable();
            $table->char('Parsial', 1)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('OriginCode', 6)->nullable();
            $table->string('DateOfBreakdown', 10)->nullable();
            $table->decimal('Pieces', 18, 0)->nullable();
            $table->decimal('Netto', 18, 0)->nullable();
            $table->float('Volume')->nullable();
            $table->string('KindOfCode', 5)->nullable();
            $table->string('KindOfGood', 30)->nullable();
            $table->string('StorageRoom', 2)->nullable();
            $table->string('DG', 2)->nullable();
            $table->string('Location', 5)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable();
            $table->timestamp('created_at')->default('current_timestamp()');
            $table->timestamp('modify_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('inc_deliorderdetail');
    }
}
