<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManifestInwardTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manifest_inward', function (Blueprint $table) {
            $table->bigInteger('Noid');
            $table->string('WaybillNumber', 12)->nullable();
            $table->string('parsial', 1)->default('0');
            $table->string('ServiceNumber', 25)->nullable();
            $table->string('ConversionNumber', 25)->nullable();
            $table->string('OriginCountry', 5)->nullable();
            $table->string('DestinationCountry', 5)->nullable();
            $table->string('ParcelWeight', 10)->nullable();
            $table->string('ParcelLong', 10)->nullable();
            $table->string('ParcelWide', 10)->nullable();
            $table->string('ParcelHigh', 10)->nullable();
            $table->string('ParcelVolume', 10)->nullable();
            $table->string('ConsignmentDate', 10)->nullable();
            $table->string('TaxConsigneeNumber', 15)->nullable();
            $table->string('ConsigneeName', 50)->nullable();
            $table->string('ConsigneeCompany', 50)->nullable();
            $table->string('ConsigneePhone', 15)->nullable();
            $table->string('ConsigneeMobile', 15)->nullable();
            $table->string('ConsigneeFax', 15)->nullable();
            $table->string('ConsigneeEmail', 35)->nullable();
            $table->string('ConsigneePostalCode', 10)->nullable();
            $table->string('ConsigneeCountry', 15)->nullable();
            $table->string('ConsigneeCountryCode', 5)->nullable();
            $table->string('ConsigneeState', 25)->nullable();
            $table->string('ConsigneeCity', 25)->nullable();
            $table->string('ConsigneeCounty', 25)->nullable();
            $table->string('ConsigneeAddress1', 250)->nullable();
            $table->string('ConsigneeAddress2', 250)->nullable();
            $table->string('ShipperName', 50)->nullable();
            $table->string('ShipperCompany', 50)->nullable();
            $table->string('ShipperPhone', 15)->nullable();
            $table->string('ShipperMobile', 15)->nullable();
            $table->string('ShipperFax', 15)->nullable();
            $table->string('ShipperEmail', 50)->nullable();
            $table->string('ShipperPostalCode', 10)->nullable();
            $table->string('ShipperCountry', 10)->nullable();
            $table->string('ShipperCountryCode', 10)->nullable();
            $table->string('ShipperState', 10)->nullable();
            $table->string('ShipperCity', 15)->nullable();
            $table->string('ShipperCounty', 15)->nullable();
            $table->string('ShipperAddress1', 250)->nullable();
            $table->string('ShipperAddress2', 250)->nullable();
            $table->string('ParcelQuantity', 10)->nullable();
            $table->string('ProductQuantity', 10)->nullable();
            $table->string('ProductDescription', 100)->nullable();
            $table->string('DeclarationPrice', 25)->nullable();
            $table->string('Currency', 5)->nullable();
            $table->string('BillingCode', 5)->nullable();
            $table->string('billingAccount', 25)->nullable();
            $table->string('brokerName', 50)->nullable();
            $table->string('Brokerphone', 15)->nullable();
            $table->string('hsCode', 8)->nullable();
            $table->string('FreightCost', 10)->nullable();
            $table->string('Insurance', 10)->nullable();
            $table->string('Bagno', 50)->nullable();
            $table->string('PaymentType', 25)->nullable();
            $table->string('OrderNumber', 25)->nullable();
            $table->string('PackageID', 25)->nullable();
            $table->string('AirlinesCode', 2)->default('');
            $table->string('FlightNo', 6)->default('');
            $table->string('route', 6)->default('');
            $table->string('dateflight', 10)->default('');
            $table->string('dateentry', 10)->nullable();
            $table->string('timeentry', 8)->nullable();
            $table->boolean('void')->default(0);
            $table->string('token', 5)->nullable();
            $table->timestamp('created_at')->default('current_timestamp()');
            
            $table->primary(['Noid', 'FlightNo']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('manifest_inward');
    }
}
