<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInwardTabfhlTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inward_tabfhl', function (Blueprint $table) {
            $table->bigInteger('ID');
            $table->string('HwbDate', 8)->nullable();
            $table->string('AwbNo', 20)->nullable();
            $table->string('HwbNo', 12)->nullable();
            $table->string('PortOfOrigin', 3)->nullable();
            $table->string('FinalDestination', 3)->nullable();
            $table->string('NumberOfPieces', 4)->nullable();
            $table->string('WeightCode', 1)->nullable();
            $table->string('Weight', 7)->nullable();
            $table->string('Description', 50)->nullable();
            $table->boolean('void')->default(0);
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
        Schema::dropIfExists('inward_tabfhl');
    }
}
