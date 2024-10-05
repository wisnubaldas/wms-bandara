<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFfmAUldloadedcargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_ffm_a_uldloadedcargo', function (Blueprint $table) {
            $table->bigInteger('id')->primary();
            $table->string('MessageKey', 80)->nullable()->index('_WA_Sys_MessageKey_3C34F16F');
            $table->string('MessageLineNo', 3)->nullable()->index('_WA_Sys_MessageLineNo_3C34F16F');
            $table->string('LineIdentifier', 3)->nullable()->index('_WA_Sys_LineIdentifier_3C34F16F');
            $table->string('Point_Of_Unloading', 3)->nullable()->index('_WA_Sys_Point_Of_Unloading_3C34F16F');
            $table->string('ULDType', 3)->nullable()->index('_WA_Sys_ULDType_3C34F16F');
            $table->string('ULDSerialNumber', 5)->nullable()->index('_WA_Sys_ULDSerialNumber_3C34F16F');
            $table->string('ULDOwnerCode', 2)->nullable()->index('_WA_Sys_ULDOwnerCode_3C34F16F');
            $table->string('ULDLoadingIndicator', 1)->nullable()->index('_WA_Sys_ULDLoadingIndicator_3C34F16F');
            $table->string('ULDRemarks', 53)->nullable()->index('_WA_Sys_ULDRemarks_3C34F16F');
            $table->string('AirlinePrefix', 3)->nullable()->index('_WA_Sys_AirlinePrefix_3C34F16F');
            $table->string('AWBSerialNumber', 8)->nullable()->index('_WA_Sys_AWBSerialNumber_3C34F16F');
            $table->string('AirportCityCodeOfOrigin', 3)->nullable()->index('_WA_Sys_AirportCityCodeOfOrigin_3C34F16F');
            $table->string('AirportCityCodeOfDestination', 3)->nullable()->index('_WA_Sys_AirportCityCodeOfDestination_3C34F16F');
            $table->string('ShipmentDescriptionCodeOfQuantityDetail', 1)->nullable()->index('_WA_Sys_ShipmentDescriptionCodeOfQuantityDetail_3C34F16F');
            $table->string('NumberOfPiecesOfQuantityDetail', 4)->nullable()->index('_WA_Sys_NumberOfPiecesOfQuantityDetail_3C34F16F');
            $table->string('WeightCode', 1)->nullable()->index('_WA_Sys_WeightCode_3C34F16F');
            $table->string('Weight', 7)->nullable()->index('_WA_Sys_Weight_3C34F16F');
            $table->string('VolumeCode', 2)->nullable()->index('_WA_Sys_VolumeCode_3C34F16F');
            $table->string('VolumeAmount', 9)->nullable()->index('_WA_Sys_VolumeAmount_3C34F16F');
            $table->string('DensityIndicator', 2)->nullable()->index('_WA_Sys_DensityIndicator_3C34F16F');
            $table->string('DensityGroup', 3)->nullable()->index('_WA_Sys_DensityGroup_3C34F16F');
            $table->string('ShipmentDescriptionCodeOfTotalConsignmentPieces', 1)->nullable()->index('_WA_Sys_ShipmentDescriptionCodeOfTotalConsignmentPieces_3C34F16F');
            $table->string('NumberOfPiecesOfTotalConsignmentPieces', 4)->nullable()->index('_WA_Sys_NumberOfPiecesOfTotalConsignmentPieces_3C34F16F');
            $table->string('ManifestDescriptionOfGoods', 15)->nullable()->index('_WA_Sys_ManifestDescriptionOfGoods_3C34F16F');
            $table->string('SpecialHandlingCode1', 3)->nullable()->index('_WA_Sys_SpecialHandlingCode1_3C34F16F');
            $table->string('SpecialHandlingCode2', 3)->nullable()->index('_WA_Sys_SpecialHandlingCode2_3C34F16F');
            $table->string('FlagFormat', 1)->nullable()->index('_WA_Sys_FlagFormat_3C34F16F');
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
        Schema::dropIfExists('sending_ffm_a_uldloadedcargo');
    }
}
