<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpHostawbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_hostawb', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('HostAWB', 25)->nullable()->index('HostAWB');
            $table->string('tglAWB', 10)->nullable()->index('tglAWB');
            $table->string('tglMasterAWB', 10)->nullable();
            $table->integer('Quantity')->nullable();
            $table->decimal('Weight', 10, 2)->nullable();
            $table->decimal('Volume', 10, 2)->nullable();
            $table->string('airlinescode', 2)->nullable();
            $table->string('FlightNo', 7)->nullable()->index('FlightNo');
            $table->string('DateOfFlight', 10)->nullable()->index('DateOfFlight');
            $table->string('Origin', 6)->nullable()->index('Origin');
            $table->string('HSCode', 8)->nullable();
            $table->string('DescriptionGoods', 150)->nullable();
            $table->string('AgenCode', 19)->nullable();
            $table->string('ShipperCode', 19)->nullable();
            $table->string('shippername', 60)->nullable();
            $table->string('shipperaddress', 200)->nullable();
            $table->string('shippercity', 50)->nullable();
            $table->string('shippercountry', 50)->nullable();
            $table->string('shipperpostal', 10)->nullable();
            $table->string('ConsigneeCode', 19)->nullable();
            $table->string('Consigneename', 60)->nullable();
            $table->string('Consigneeaddress', 200)->nullable();
            $table->string('Consigneecity', 50)->nullable();
            $table->string('Consigneecountry', 50)->nullable();
            $table->string('Consigneepostal', 10)->nullable();
            $table->string('ConsigneeTaxNo', 15)->nullable();
            $table->string('bc11', 15)->nullable();
            $table->string('tglbc', 10)->nullable();
            $table->string('nopos', 4)->nullable();
            $table->string('subpos', 4)->nullable();
            $table->string('subsubpos', 4)->nullable();
            $table->string('noplp', 6)->nullable();
            $table->string('tglplp', 10)->nullable();
            $table->string('typeClearance', 10)->nullable();
            $table->string('SPPB', 6)->nullable();
            $table->string('TGLSPPB', 10)->nullable();
            $table->string('LOCATION', 10)->nullable();
            $table->string('DateOfOut', 10)->nullable();
            $table->string('TimeOut', 5)->nullable();
            $table->string('DateOfIn', 10)->nullable();
            $table->string('TimeIn', 5)->nullable();
            $table->string('BagNumber', 100)->nullable();
            $table->string('DateEntry', 10)->nullable();
            $table->string('TimeEntry', 8)->nullable();
            $table->boolean('flagDO')->default(0);
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable()->index('token');
            $table->boolean('flag_in')->default(0);
            $table->boolean('flag_out')->default(0);
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
        Schema::dropIfExists('imp_hostawb');
    }
}
