<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwbTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb', function (Blueprint $table) {
            $table->string('HostName', 3)->nullable();
            $table->string('MessageKey', 100)->nullable();
            $table->char('StandardMessageIndentification', 1)->nullable();
            $table->char('AWBConsignmentDetails', 1)->nullable();
            $table->char('FlightBookings', 1)->nullable();
            $table->char('Routing', 1)->nullable();
            $table->char('Shipper', 1)->nullable();
            $table->char('Consignee', 1)->nullable();
            $table->char('Agent', 1)->nullable();
            $table->char('SpecialServiceRequest', 1)->nullable();
            $table->char('AlsoNotify', 1)->nullable();
            $table->char('AccountingInformation', 1)->nullable();
            $table->char('ChargeDeclarations', 1)->nullable();
            $table->char('RateDescription', 1)->nullable();
            $table->char('OtherCharges', 1)->nullable();
            $table->char('PrepaidChargeSummary', 1)->nullable();
            $table->char('CollectChargeSummary', 1)->nullable();
            $table->char('ShipperCertification', 1)->nullable();
            $table->char('CarrierExecution', 1)->nullable();
            $table->char('OtherServiceInformation', 1)->nullable();
            $table->char('ChargerInDestinationCurrency', 1)->nullable();
            $table->char('SenderReference', 1)->nullable();
            $table->char('CustomsOrigin', 1)->nullable();
            $table->char('CommisionInformation', 1)->nullable();
            $table->char('SalesIncentiveInformation', 1)->nullable();
            $table->char('AgentReferenceData', 1)->nullable();
            $table->char('SpecialHandlingDetails', 1)->nullable();
            $table->char('NominatedHandlingParty', 1)->nullable();
            $table->char('ShipmentReferenceInformation', 1)->nullable();
            $table->char('OtherParticipantInformation', 1)->nullable();
            $table->char('OtherCustomsInformation', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sending_fwb');
    }
}
