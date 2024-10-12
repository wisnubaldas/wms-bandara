<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOutStickerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('out_sticker', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('FlightNo', 2)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('TimeOfFlight', 5)->nullable();
            $table->string('ULD', 15)->nullable();
            $table->integer('Pallete');
            $table->decimal('GrossWeight', 10, 2)->nullable();
            $table->decimal('NettoWeight', 10, 2)->nullable();
            $table->boolean('PrintNumber')->default(0);
            $table->string('EmployeeNumber', 10)->nullable();
            $table->integer('ReportCode')->nullable();
            $table->boolean('void')->default(0);
            $table->timestamp('created_at')->default('current_timestamp()');
            $table->timestamp('modify_at')->default('current_timestamp()');

            $table->primary(['id', 'Pallete']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('out_sticker');
    }
}
