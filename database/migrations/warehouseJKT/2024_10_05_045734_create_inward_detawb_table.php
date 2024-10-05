<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInwardDetawbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inward_detawb', function (Blueprint $table) {
            $table->bigInteger('ID')->primary();
            $table->string('MessageKey', 50)->nullable();
            $table->string('airL', 3)->nullable();
            $table->string('AwbNo', 20)->nullable();
            $table->string('PortOfOrigin', 5)->nullable();
            $table->string('FinalDestination', 5)->nullable();
            $table->string('PackNum', 18)->nullable();
            $table->double('weight')->nullable();
            $table->string('Sequence', 2)->nullable();
            $table->string('ShipperName', 50)->nullable();
            $table->string('ShipperAddr', 200)->nullable();
            $table->string('ConsigneeName', 50)->nullable();
            $table->string('ConsigneeAddr', 200)->nullable();
            $table->string('NotifyName', 50)->nullable();
            $table->string('NotifyAddr', 200)->nullable();
            $table->string('Harmonize', 50)->nullable();
            $table->string('DescriptionGood', 200)->nullable();
            $table->string('HandlingInformation', 200)->nullable();
            $table->string('Cetak', 1)->nullable();
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
        Schema::dropIfExists('inward_detawb');
    }
}
