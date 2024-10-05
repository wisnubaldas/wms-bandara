<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwbCRatedescriptionDimensionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb_c_ratedescription_dimension', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable();
            $table->string('LengthOfDimensions', 10)->nullable();
            $table->string('WidthOfDimensions', 10)->nullable();
            $table->string('HeightOfDimensions', 10)->nullable();
            $table->string('NumberOfPiecesDimensions', 10)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sending_fwb_c_ratedescription_dimension');
    }
}
