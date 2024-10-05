<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksStickerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_sticker', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('FlightNo', 2)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('TimeOfFlight', 5)->nullable();
            $table->string('ULD', 15)->nullable();
            $table->decimal('Pallete', 18, 0)->nullable();
            $table->decimal('GrossWeight', 18, 0)->nullable();
            $table->decimal('NettoWeight', 18, 0)->nullable();
            $table->string('Operator', 50)->nullable();
            $table->integer('PrintNumber')->default(0);
            $table->string('EmployeeCode', 10)->nullable();
            $table->integer('ReportCode')->default(0);
            $table->string('DateEntry', 10)->nullable()->index('DateEntry');
            $table->string('TimeEntry', 8)->nullable()->index('TimeEntry');
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
        Schema::dropIfExists('eks_sticker');
    }
}
