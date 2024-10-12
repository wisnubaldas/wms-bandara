<?php

use Illuminate\Database\Migrations\Migration;

class CreateIncBreakdownViewView extends Migration
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
            CREATE VIEW `inc_breakdown_view` AS select `b`.`BreakdownNumber` AS `BreakdownNumber`,`b`.`DateOfFlight` AS `DateOfFlight`,`b`.`DateOfArrival` AS `DateOfArrival`,`b`.`TimeOfArrival` AS `TimeOfArrival`,`b`.`OperatorName` AS `OperatorName`,`b`.`TotalMasterAWB` AS `TotalMasterAWB`,`b`.`TotalPieces` AS `TotalPieces`,`b`.`TotalNetto` AS `TotalNetto`,`b`.`TotalCAW` AS `TotalCAW`,`b`.`AirCraftNumber` AS `AirCraftNumber`,`b`.`Supervisor` AS `Supervisor`,`a`.`_id` AS `Noid`,`a`.`MasterAWB` AS `MasterAWB`,`a`.`Parsial` AS `Parsial`,`a`.`TransitCode` AS `TransitCode`,`a`.`Pieces` AS `Pieces`,`a`.`Netto` AS `Netto`,`a`.`CAW` AS `CAW`,`a`.`KindOfCode` AS `KindOfCode`,`a`.`UldCardNumber` AS `UldCardNumber`,`a`.`Remark` AS `Remark`,`a`.`EmployeeNumber` AS `EmployeeNumber`,`a`.`DateOfBreakdown` AS `DateOfBreakdown`,`a`.`TimeOfBreakdown` AS `TimeOfBreakdown`,`a`.`AirlinesCode` AS `AirlinesCode`,`a`.`FlightNumber` AS `FlightNumber`,`a`.`OriginCode` AS `OriginCode`,`a`.`ProofNumber` AS `ProofNumber`,`a`.`void` AS `Void` from (`inc_breakdowndetail` `a` join `inc_breakdownheader` `b` on(`a`.`id_header` = `b`.`_id`))
        SQL;
    }

    private function dropView()
    {
        return <<<'SQL'
            DROP VIEW IF EXISTS `inc_breakdown_view`;
        SQL;
    }
}
