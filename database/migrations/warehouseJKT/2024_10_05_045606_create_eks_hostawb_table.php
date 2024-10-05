<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEksHostawbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eks_hostawb', function (Blueprint $table) {
            $table->bigInteger('noid')->primary();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('HostAWB', 25)->nullable()->index('HostAWB');
            $table->string('kd_kemasan', 2)->nullable();
            $table->integer('Quantity')->nullable();
            $table->decimal('Weight', 10, 2)->nullable();
            $table->decimal('Volume', 10, 2)->nullable();
            $table->string('airlinescode', 2)->nullable();
            $table->string('FlightNo', 10)->nullable();
            $table->string('DateOfFlight', 10)->nullable();
            $table->string('kd_doc', 2)->default('6');
            $table->string('PENnumber', 35)->nullable();
            $table->string('KTKR', 6)->nullable();
            $table->string('DateOfPen', 10)->nullable();
            $table->string('HSCode', 5)->nullable();
            $table->string('descriptiongoods', 150)->nullable();
            $table->string('AgenCode', 19)->nullable();
            $table->string('ShipperCode', 19)->nullable();
            $table->string('shippername', 60)->nullable();
            $table->string('shipperaddress', 200)->nullable();
            $table->string('shippercity', 50)->nullable();
            $table->string('shippercountry', 50)->nullable();
            $table->string('shipperpostal', 10)->nullable();
            $table->string('shipperTaxNo', 20)->nullable();
            $table->string('ConsigneeCode', 19)->nullable();
            $table->string('Consigneename', 60)->nullable();
            $table->string('Consigneeaddress', 200)->nullable();
            $table->string('Consigneecity', 50)->nullable();
            $table->string('Consigneecountry', 50)->nullable();
            $table->string('bc11', 6)->nullable();
            $table->string('tglbc', 10)->nullable();
            $table->string('nopos', 4)->nullable();
            $table->string('subpos', 4)->nullable();
            $table->string('subsubpos', 4)->nullable();
            $table->string('DateOfOut', 10)->nullable();
            $table->string('TimeOut', 8)->nullable();
            $table->string('DateOfIn', 10)->nullable();
            $table->string('TimeIn', 8)->nullable();
            $table->boolean('FHL')->default(0);
            $table->integer('Status')->default(0);
            $table->string('DateEntry', 10)->nullable()->index('DateEntry');
            $table->string('TimeEntry', 8)->nullable();
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
        Schema::dropIfExists('eks_hostawb');
    }
}
