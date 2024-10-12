<?php

use Illuminate\Database\Migrations\Migration;

class CreateImpObViewView extends Migration
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
        return <<<'SQL'
            CREATE VIEW `imp_ob_view` AS select `a`.`BreakdownNumber` AS `BreakdownNumber`,`a`.`WhOperatorCode` AS `WhOperatorCode`,`a`.`DateOfOveride` AS `DateOfOveride`,`a`.`DateOfArrival` AS `DateOfArrival`,`a`.`TimeOfArrival` AS `TimeOfArrival`,`a`.`OperatorName` AS `OperatorName`,`a`.`TotalMasterAWB` AS `TotalMasterAWB`,`a`.`TotalPieces` AS `TotalPieces`,`a`.`TotalNetto` AS `TotalNetto`,`a`.`TotalCAW` AS `TotalCAW`,`a`.`Supervisor` AS `Supervisor`,`b`.`noid` AS `Noid`,`b`.`MasterAWB` AS `MasterAWB`,`b`.`Parsial` AS `Parsial`,`b`.`PosMaster` AS `PosMaster`,`b`.`TransitCode` AS `TransitCode`,`b`.`Pieces` AS `Pieces`,`b`.`Netto` AS `Netto`,`b`.`Volume` AS `Volume`,`b`.`KindOfCode` AS `KindOfCode`,`b`.`KindOfGood` AS `KindOfGood`,`b`.`UldCardNumber` AS `UldCardNumber`,`b`.`Remark` AS `Remark`,`b`.`EmployeeNumber` AS `EmployeeNumber`,`b`.`DateOfBreakdown` AS `DateOfBreakdown`,`b`.`TimeOfBreakdown` AS `TimeOfBreakdown`,`b`.`AirlinesCode` AS `AirlinesCode`,`b`.`FlightNumber` AS `FlightNumber`,`b`.`OriginCode` AS `OriginCode`,`b`.`PrintNumber` AS `PrintNumber`,`b`.`LocationCode` AS `LocationCode`,`b`.`flagInvoice` AS `flagInvoice` from (`imp_obdetail` `b` join `imp_obheader` `a` on(`a`.`BreakdownNumber` = `b`.`BreakdownNumber`))
        SQL;
    }

    private function dropView()
    {
        return <<<'SQL'
            DROP VIEW IF EXISTS `imp_ob_view`;
        SQL;
    }
}
