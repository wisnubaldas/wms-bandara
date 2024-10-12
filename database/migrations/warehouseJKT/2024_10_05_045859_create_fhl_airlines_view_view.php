<?php

use Illuminate\Database\Migrations\Migration;

class CreateFhlAirlinesViewView extends Migration
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
            CREATE VIEW `fhl_airlines_view` AS select `b`.`noid` AS `Noid`,`b`.`HostAWB` AS `hostAWB`,`b`.`KindOfCode` AS `KindOfCode`,`a`.`ProofNumber` AS `ProofNumber`,`a`.`MasterAWB` AS `MasterAWB`,`a`.`AirlinesCode` AS `AirlinesCode`,`a`.`Origin` AS `Origin`,`a`.`Destination` AS `Destination`,`a`.`FlightNumber` AS `FlightNumber`,`a`.`ShipperCode` AS `ShipperCode`,`a`.`AgenCode` AS `AgenCode`,`a`.`ConsigneeCode` AS `ConsigneeCode`,`a`.`AgenPIC` AS `AgenPIC`,`a`.`TotalPieces` AS `TotalPieces`,`a`.`TotalPallet` AS `TotalPallet`,`a`.`TotalNetto` AS `TotalNetto`,`a`.`TotalVolume` AS `TotalVolume`,`a`.`TotalCAW` AS `TotalCAW`,`a`.`DateOfFlight` AS `DateOfFlight`,`a`.`DateOfEntry` AS `DateOfEntry`,`a`.`TimeOfEntry` AS `TimeOfEntry`,`a`.`BookingCode` AS `BookingCode`,`a`.`MultiVolume` AS `MultiVolume`,`a`.`PaymentCode` AS `PaymentCode`,`a`.`Directmaster` AS `Directmaster`,`a`.`EmployeeNumber` AS `EmployeeNumber`,`a`.`InvoiceNumber` AS `InvoiceNumber`,`a`.`PrintNumber` AS `PrintNumber`,`a`.`report` AS `Report`,`a`.`void` AS `Void`,`a`.`RCS` AS `RCS` from (`eks_weighingheader` `a` join `eks_weighingdetail` `b` on(`a`.`ProofNumber` = `b`.`ProofNumber`)) where `a`.`FHL` <> 2 and `a`.`FWB` = 2 and `a`.`Directmaster` = 'F' order by `a`.`MasterAWB`
        SQL;
    }

    private function dropView()
    {
        return <<<'SQL'
            DROP VIEW IF EXISTS `fhl_airlines_view`;
        SQL;
    }
}
