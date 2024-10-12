<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFwbCRatedescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_fwb_c_ratedescription', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->string('MessageKey', 80);
            $table->string('MessageLineNo', 3)->nullable();
            $table->string('LineIdentifier', 3)->nullable();
            $table->string('AWBRateLineNumber', 2)->nullable();
            $table->string('AWBColumnIdentifierP', 1)->nullable();
            $table->string('NumberOfPieces', 4)->nullable();
            $table->string('RateCombinationPoint', 3)->nullable();
            $table->string('WeightCode', 1)->nullable();
            $table->string('WeightGross', 7)->nullable();
            $table->string('AWBColumnIdentifierC', 1)->nullable();
            $table->string('RateClassCode', 1)->nullable();
            $table->string('AWBColumnIdentifierS', 1)->nullable();
            $table->string('CommodityItemNumber', 7)->nullable();
            $table->string('ULDRateClassType', 3)->nullable();
            $table->string('RateClassCodeBasis', 1)->nullable();
            $table->string('ClassRatePercentage', 3)->nullable();
            $table->string('AWBColumnIdentifierW', 1)->nullable();
            $table->string('Weight', 7)->nullable();
            $table->string('AWBColumnIdentifierR', 1)->nullable();
            $table->string('RateOrCharge', 8)->nullable();
            $table->string('Discount', 8)->nullable();
            $table->string('AWBColumnIdentifierT', 1)->nullable();
            $table->string('ChargeAmount', 12)->nullable();
            $table->string('DiscountAmount', 12)->nullable();
            $table->string('AWBColumnIdentifierGoods', 1)->nullable();
            $table->string('GoodsDataIdentifierOfGoods', 1);
            $table->string('NatureAndQuantityOfGoods', 20)->nullable();
            $table->string('AWBColumnIdentifierConsolidation', 1)->nullable();
            $table->string('GoodsDataIdentifierOfConsolidation', 1)->nullable();
            $table->string('NatureAndQuantityOfConsolidation', 20)->nullable();
            $table->string('AWBColumnIdentifierDimensions', 1)->nullable();
            $table->string('GoodsDataIdentifierOfDimensions', 1)->nullable();
            $table->string('WeightCodeOfDimensions', 1)->nullable();
            $table->string('WeightOfDimensions', 7)->nullable();
            $table->string('MeasurementUnitCode', 3)->nullable();
            $table->string('NoDimensionsAvailable', 3)->nullable();
            $table->string('LengthOfDimensions', 5)->nullable();
            $table->string('WidthOfDimensions', 5)->nullable();
            $table->string('HeightOfDimensions', 5)->nullable();
            $table->string('NumberOfPiecesDimensions', 4)->nullable();
            $table->string('AWBColumnIdentifierVolume', 1)->nullable();
            $table->string('GoodsDataIdentifierOfVolume', 1)->nullable();
            $table->string('VolumeCodeOfVolume', 2)->nullable();
            $table->string('VolumeAmountOfVolume', 9)->nullable();
            $table->string('AWBColumnIdentifierULD', 1)->nullable();
            $table->string('GoodsDataIdentifierOfULD', 1)->nullable();
            $table->string('ULDType', 3)->nullable();
            $table->string('ULDSerialNumber', 5)->nullable();
            $table->string('ULDOwnerCode', 2)->nullable();
            $table->string('AWBColumnIdentifierShipper', 1)->nullable();
            $table->string('GoodsDataIdentifierOfShipper', 1)->nullable();
            $table->string('SLAC', 5)->nullable();
            $table->string('AWBColumnIdentifierHarmonised', 1)->nullable();
            $table->string('GoodsDataIdentifierOfHarmonised', 1)->nullable();
            $table->string('HarmonisedCommodityCode', 18)->nullable();
            $table->string('AWBColumnIdentifierCountry', 1)->nullable();
            $table->string('GoodsDataIdentifierOfCountry', 1)->nullable();
            $table->string('CountryCode', 2)->nullable();
            $table->string('ServiceCode', 1)->nullable();
            $table->timestamp('created_at')->default('current_timestamp()');

            $table->primary(['id', 'MessageKey']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sending_fwb_c_ratedescription');
    }
}
