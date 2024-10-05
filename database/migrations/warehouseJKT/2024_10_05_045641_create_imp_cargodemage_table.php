<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpCargodemageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imp_cargodemage', function (Blueprint $table) {
            $table->bigInteger('_id')->primary();
            $table->string('MasterAWB', 15)->nullable()->index('MasterAWB');
            $table->string('AirlinesCode', 2)->nullable()->index('AirlinesCode');
            $table->string('Destination', 3)->nullable();
            $table->string('FlightNumber', 5)->nullable();
            $table->integer('TotalPieces')->nullable();
            $table->double('ActualWeight')->nullable();
            $table->string('DateOfIssue', 10)->nullable();
            $table->string('TimeOfIssue', 8)->nullable();
            $table->tinyInteger('OptInsurance')->nullable();
            $table->tinyInteger('OptImformed')->nullable();
            $table->tinyInteger('OptcontentChecked')->nullable();
            $table->string('WhomChecked', 50)->nullable();
            $table->string('SpecialMarking', 50)->nullable();
            $table->string('CleanReceipt', 50)->nullable();
            $table->text('remarks')->nullable();
            $table->tinyInteger('Recoverage_Destroyed')->nullable();
            $table->tinyInteger('Recoverage_LockOf')->nullable();
            $table->tinyInteger('Recoverage_Container')->nullable();
            $table->tinyInteger('Recoverage_Wrapping')->nullable();
            $table->tinyInteger('Recoverage_OuterPacking')->nullable();
            $table->tinyInteger('Recoverage_Strapped')->nullable();
            $table->tinyInteger('Recoverage_Corded')->nullable();
            $table->tinyInteger('Recoverage_Taped')->nullable();
            $table->tinyInteger('Recoverage_Sealed')->nullable();
            $table->tinyInteger('Contens_Broken')->nullable();
            $table->tinyInteger('Contens_Dead')->nullable();
            $table->tinyInteger('Contens_Decayed')->nullable();
            $table->tinyInteger('Contens_Frozen')->nullable();
            $table->tinyInteger('Contens_Leaking')->nullable();
            $table->tinyInteger('Contens_Sick')->nullable();
            $table->tinyInteger('Contens_Ratting')->nullable();
            $table->tinyInteger('Contens_Overheated')->nullable();
            $table->tinyInteger('Contens_Soiled')->nullable();
            $table->tinyInteger('Contens_Squashed')->nullable();
            $table->tinyInteger('Contens_Wilted')->nullable();
            $table->tinyInteger('Contens_Others')->nullable();
            $table->string('Contens_OthersChar', 50)->nullable();
            $table->tinyInteger('InnerPacking_Cotton')->nullable();
            $table->tinyInteger('InnerPacking_NewsPaper')->nullable();
            $table->tinyInteger('InnerPacking_Padding')->nullable();
            $table->tinyInteger('InnerPacking_Ripped')->nullable();
            $table->tinyInteger('InnerPacking_Sawdust')->nullable();
            $table->tinyInteger('InnerPacking_TissuePaper')->nullable();
            $table->tinyInteger('InnerPacking_WoodBlocking')->nullable();
            $table->tinyInteger('InnerPacking_WoodShaving')->nullable();
            $table->tinyInteger('InnerPacking_Others')->nullable();
            $table->string('InnerPacking_OthersChar', 50)->nullable();
            $table->tinyInteger('Discovered_InAircraft')->nullable();
            $table->string('Discovered_InAircraftChar', 50)->nullable();
            $table->tinyInteger('Discovered_Loading')->nullable();
            $table->tinyInteger('Discovered_UnLoading')->nullable();
            $table->tinyInteger('Discovered_Transporting')->nullable();
            $table->tinyInteger('Discovered_InWarehouse')->nullable();
            $table->string('Discovered_InWarehouseChar', 50)->nullable();
            $table->tinyInteger('Packing_Broken')->nullable();
            $table->tinyInteger('Packing_Corroded')->nullable();
            $table->tinyInteger('Packing_Crushed')->nullable();
            $table->tinyInteger('Packing_HoleIn')->nullable();
            $table->tinyInteger('Packing_Ripped')->nullable();
            $table->tinyInteger('Packing_Seams')->nullable();
            $table->tinyInteger('Packing_TapeTorn')->nullable();
            $table->tinyInteger('Packing_TapeLoose')->nullable();
            $table->tinyInteger('Packing_Torn')->nullable();
            $table->tinyInteger('Packing_Wet')->nullable();
            $table->tinyInteger('Packing_Others')->nullable();
            $table->string('Packing_OthersChar', 50)->nullable();
            $table->tinyInteger('DemageDueTo_Handling')->nullable();
            $table->tinyInteger('DemageDueTo_Improper')->nullable();
            $table->tinyInteger('DemageDueTo_Inadequate')->nullable();
            $table->tinyInteger('DemageDueTo_TooLong')->nullable();
            $table->tinyInteger('DemageDueTo_Stowage')->nullable();
            $table->tinyInteger('DemageDueTo_Pilferage')->nullable();
            $table->tinyInteger('DemageDueTo_Others')->nullable();
            $table->string('DamageDueTo_OthersChar', 50)->nullable();
            $table->string('EmployeeNumber', 10)->nullable();
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
        Schema::dropIfExists('imp_cargodemage');
    }
}
