<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTShipmentEksporTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_shipment_ekspor', function (Blueprint $table) {
            $table->bigInteger('Noid')->primary();
            $table->string('entrydate', 10)->nullable();
            $table->string('entrytime', 5)->nullable();
            $table->string('mawb', 15)->nullable()->index('mawb');
            $table->string('hawb', 30)->nullable();
            $table->integer('pieces')->nullable();
            $table->double('weight')->nullable();
            $table->string('airline_code', 2);
            $table->string('flight_no', 6);
            $table->string('dateflight', 10)->nullable();
            $table->string('ETA_ETD', 5)->nullable();
            $table->string('SHIPPER', 100)->nullable();
            $table->string('CONSIGNEE', 100)->nullable();
            $table->string('AGENT', 100)->nullable();
            $table->string('NatureGood', 50)->nullable();
            $table->string('STATUS', 35)->nullable()->index('status');
            $table->longText('History')->nullable();
            $table->boolean('void')->default(0);
            $table->unsignedTinyInteger('flag_close')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('t_shipment_ekspor');
    }
}
