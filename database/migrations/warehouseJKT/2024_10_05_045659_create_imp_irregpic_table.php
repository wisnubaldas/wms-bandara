<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpIrregpicTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_irregpic', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('Namepic', 50)->nullable()->index('Namepic');
            $table->string('DateOfRecord', 10)->nullable()->index('DateOfRecord');
            $table->string('TimeOfRecord', 8)->nullable();
            $table->string('AirlinesCode', 2)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->string('DescriptionImage', 200)->nullable();
            $table->string('SizePicture', 50)->nullable();
            $table->longblob('DataPicture')->nullable();
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
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
        Schema::dropIfExists('imp_irregpic');
    }
}
