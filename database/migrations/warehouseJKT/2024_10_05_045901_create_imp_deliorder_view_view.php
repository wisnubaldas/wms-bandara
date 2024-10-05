<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpDeliorderViewView extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement($this->dropView());
        DB::statement($this->createView());
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::statement($this->dropView());
    }

    private function createView()
    {
        return <<<SQL
            CREATE VIEW `imp_deliorder_view` AS select `a`.`DONumber` AS `DONumber`,`a`.`TotalPieces` AS `TotalPieces`,`a`.`TotalNetto` AS `TotalNetto`,`a`.`TotalVolume` AS `TotalVolume`,`a`.`ConsigneeCode` AS `ConsigneeCode`,`a`.`PICName` AS `PICName`,`a`.`EmployeeNumber` AS `EmployeeNumber`,`a`.`DateOfDeliveryOrder` AS `DateOfDeliveryOrder`,`a`.`TimeOfDeliveryOrder` AS `TimeOfDeliveryOrder`,`a`.`PrintNumber` AS `PrintNumber`,`a`.`InvoiceNumber` AS `InvoiceNumber`,`a`.`ShiftCode` AS `ShiftCode`,`a`.`ClearanceType` AS `ClearanceType`,`a`.`Nondoc` AS `Nondoc`,`a`.`DateOfOut` AS `DateOfOut`,`b`.`noid` AS `Noid`,`b`.`BreakdownNumber` AS `BreakdownNumber`,`b`.`MasterAWB` AS `MasterAWB`,`b`.`Parsial` AS `Parsial`,`b`.`AirlinesCode` AS `AirlinesCode`,`b`.`FlightNumber` AS `FlightNumber`,`b`.`OriginCode` AS `OriginCode`,`b`.`DateOfBreakdown` AS `DateOfBreakdown`,`b`.`HostMAWB` AS `HostMAWB`,`b`.`Pieces` AS `Pieces`,`b`.`Netto` AS `Netto`,`b`.`Volume` AS `Volume`,`b`.`KindOfCode` AS `KindOfCode`,`b`.`KindOfGood` AS `KindOfGood`,`b`.`StorageRoom` AS `StorageRoom`,`b`.`DG` AS `DG`,`b`.`Location` AS `Location`,`b`.`AWD` AS `AWD`,`b`.`void` AS `void` from (`imp_deliorderheader` `a` join `imp_deliorderdetail` `b` on(`a`.`DONumber` = `b`.`DONumber`))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `imp_deliorder_view`;
        SQL;
    }
}
