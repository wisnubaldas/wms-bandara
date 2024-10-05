<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpBreakdownViewView extends Migration
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
            CREATE VIEW `imp_breakdown_view` AS select `a`.`BreakdownNumber` AS `BreakdownNumber`,`a`.`DateOfFlight` AS `DateOfFlight`,`a`.`DateOfArrival` AS `DateOfArrival`,`a`.`TimeOfArrival` AS `TimeOfArrival`,`a`.`OperatorName` AS `OperatorName`,`a`.`TotalMasterAWB` AS `TotalMasterAWB`,`a`.`TotalPieces` AS `TotalPieces`,`a`.`TotalNetto` AS `TotalNetto`,`a`.`TotalCAW` AS `TotalCAW`,`a`.`AirCraftNumber` AS `AirCraftNumber`,`a`.`Supervisor` AS `Supervisor`,`b`.`noid` AS `noid`,`b`.`MasterAWB` AS `MasterAWB`,`b`.`Parsial` AS `Parsial`,`b`.`PosMaster` AS `PosMaster`,`b`.`TransitCode` AS `TransitCode`,`b`.`Pieces` AS `Pieces`,`b`.`Netto` AS `Netto`,`b`.`Volume` AS `Volume`,`b`.`KindOfCode` AS `KindOfCode`,`b`.`KindOfGood` AS `KindOfGood`,`b`.`UldCardNumber` AS `UldCardNumber`,`b`.`Remark` AS `Remark`,`b`.`EmployeeNumber` AS `EmployeeNumber`,`b`.`DateOfBreakdown` AS `DateOfBreakdown`,`b`.`TimeOfBreakdown` AS `TimeOfBreakdown`,`b`.`AirlinesCode` AS `AirlinesCode`,`b`.`FlightNumber` AS `FlightNumber`,`b`.`OriginCode` AS `OriginCode`,`b`.`PrintNumber` AS `PrintNumber`,`b`.`LocationCode` AS `LocationCode`,`b`.`void` AS `Void`,`b`.`flagInvoice` AS `flagInvoice`,`b`.`RCF` AS `RCF` from (`imp_breakdownheader` `a` join `imp_breakdowndetail` `b` on(`a`.`BreakdownNumber` = convert(`b`.`BreakdownNumber` using utf8mb3)))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `imp_breakdown_view`;
        SQL;
    }
}
