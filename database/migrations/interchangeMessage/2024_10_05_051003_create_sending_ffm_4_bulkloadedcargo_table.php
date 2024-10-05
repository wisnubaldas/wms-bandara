<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFfm4BulkloadedcargoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_ffm_4_bulkloadedcargo', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('MessageKey', 80)->nullable()->index('_WA_Sys_MessageKey_6C190EBB');
            $table->string('MessageLineNo', 3)->nullable()->index('_WA_Sys_MessageLineNo_6C190EBB');
            $table->string('Point_Of_Unloading', 3)->nullable()->index('_WA_Sys_Point_Of_Unloading_6C190EBB');
            $table->string('ULD_Description', 80)->nullable()->index('_WA_Sys_ULD_Description_6C190EBB');
            $table->string('AirlinePrefix', 3)->nullable()->index('_WA_Sys_AirlinePrefix_6C190EBB');
            $table->string('AWBSerialNumber', 8)->nullable()->index('_WA_Sys_AWBSerialNumber_6C190EBB');
            $table->string('AirportCityCodeOfOrigin', 3)->nullable()->index('_WA_Sys_AirportCityCodeOfOrigin_6C190EBB');
            $table->string('AirportCityCodeOfDestination', 3)->nullable()->index('_WA_Sys_AirportCityCodeOfDestination_6C190EBB');
            $table->string('ShipmentDescriptionCodeOfQuantityDetail', 1)->nullable()->index('_WA_Sys_ShipmentDescriptionCodeOfQuantityDetail_6C190EBB');
            $table->string('NumberOfPiecesOfQuantityDetail', 4)->nullable()->index('_WA_Sys_NumberOfPiecesOfQuantityDetail_6C190EBB');
            $table->string('WeightCode', 1)->nullable()->index('_WA_Sys_WeightCode_6C190EBB');
            $table->string('Weight', 7)->nullable()->index('_WA_Sys_Weight_6C190EBB');
            $table->string('VolumeCode', 2)->nullable()->index('_WA_Sys_VolumeCode_6C190EBB');
            $table->string('VolumeAmount', 9)->nullable()->index('_WA_Sys_VolumeAmount_6C190EBB');
            $table->string('DensityIndicator', 2)->nullable()->index('_WA_Sys_DensityIndicator_6C190EBB');
            $table->string('DensityGroup', 3)->nullable()->index('_WA_Sys_DensityGroup_6C190EBB');
            $table->string('ShipmentDescriptionCodeOfTotalConsignmentPieces', 1)->nullable()->index('_WA_Sys_ShipmentDescriptionCodeOfTotalConsignmentPieces_6C190EBB');
            $table->string('NumberOfPiecesOfTotalConsignmentPieces', 4)->nullable()->index('_WA_Sys_NumberOfPiecesOfTotalConsignmentPieces_6C190EBB');
            $table->string('ManifestDescriptionOfGoods', 15)->nullable()->index('_WA_Sys_ManifestDescriptionOfGoods_6C190EBB');
            $table->string('SpecialHandlingCode1', 3)->nullable()->index('_WA_Sys_SpecialHandlingCode1_6C190EBB');
            $table->string('SpecialHandlingCode2', 3)->nullable()->index('_WA_Sys_SpecialHandlingCode2_6C190EBB');
            $table->string('FlagFormat', 1)->nullable()->index('_WA_Sys_FlagFormat_6C190EBB');
            $table->timestamp('create_at')->default('current_timestamp()');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sending_ffm_4_bulkloadedcargo');
    }
}
