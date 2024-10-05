<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceiveFfm5DimensionsinformationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receive_ffm_5_dimensionsinformation', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('WeightCode', 1)->nullable();
            $table->string('Weight', 7)->nullable();
            $table->string('MeasurementUnitCode', 3)->nullable();
            $table->string('LengthDimension', 5)->nullable();
            $table->string('WidthDimension', 5)->nullable();
            $table->string('HeightDimesion', 5)->nullable();
            $table->string('NumberOfPieces', 4)->nullable();
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
        Schema::dropIfExists('receive_ffm_5_dimensionsinformation');
    }
}
