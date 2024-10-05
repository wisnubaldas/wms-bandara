<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSendingFfmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sending_ffm', function (Blueprint $table) {
            $table->string('HostName', 3)->nullable();
            $table->string('MessageKey', 100)->nullable();
            $table->tinyInteger('MessageSent')->nullable();
            $table->longText('OriginalMessage')->nullable();
            $table->char('MessageIdentifier', 1)->nullable();
            $table->char('ManifestHeader', 1)->nullable();
            $table->char('DestinationHeader', 1)->nullable();
            $table->char('BulkLoadedCargo', 1)->nullable();
            $table->char('DimensionsInformation', 1)->nullable();
            $table->char('ConsignmentOnwardMovementInformation', 1)->nullable();
            $table->char('ULDMovementInformation', 1)->nullable();
            $table->char('OtherServiceInformation', 1)->nullable();
            $table->char('SpecialCustomsInformation', 1)->nullable();
            $table->char('ULDLoadedCargo', 1)->nullable();
            $table->char('ManifestTrailer', 1)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sending_ffm');
    }
}
