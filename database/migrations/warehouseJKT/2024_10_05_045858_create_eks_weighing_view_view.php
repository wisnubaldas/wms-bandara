<?php

use Illuminate\Database\Migrations\Migration;

class CreateEksWeighingViewView extends Migration
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
            CREATE VIEW `eks_weighing_view` AS select `a`.`ProofNumber` AS `ProofNumber`,`a`.`AirlinesCode` AS `AirlinesCode`,`a`.`Origin` AS `Origin`,`a`.`Destination` AS `Destination`,`a`.`FlightNumber` AS `FlightNumber`,`a`.`ShipperCode` AS `ShipperCode`,`a`.`AgenCode` AS `AgenCode`,`a`.`ConsigneeCode` AS `ConsigneeCode`,`a`.`AgenPIC` AS `AgenPIC`,`a`.`TotalPieces` AS `TotalPieces`,`a`.`TotalPallet` AS `TotalPallet`,`a`.`TotalNetto` AS `TotalNetto`,`a`.`TotalVolume` AS `TotalVolume`,`a`.`TotalCAW` AS `TotalCAW`,`a`.`DateOfFlight` AS `DateOfFlight`,`a`.`DateOfEntry` AS `DateOfEntry`,`a`.`TimeOfEntry` AS `TimeOfEntry`,`a`.`BookingCode` AS `BookingCode`,`a`.`MultiVolume` AS `MultiVolume`,`a`.`PaymentCode` AS `PaymentCode`,`a`.`EmployeeNumber` AS `EmployeeNumber`,`a`.`InvoiceNumber` AS `InvoiceNumber`,`a`.`PrintNumber` AS `PrintNumber`,`a`.`report` AS `Report`,`a`.`void` AS `Void`,`a`.`RCS` AS `RCS`,`b`.`noid` AS `Noid`,`b`.`MasterAWB` AS `MasterAWB`,`b`.`HostAWB` AS `HostAWB`,`b`.`Pieces` AS `Pieces`,`b`.`Pallet` AS `Pallet`,`b`.`GrossWeight` AS `GrossWeight`,`b`.`NettoWeight` AS `NettoWeight`,`b`.`LongCargo` AS `LongCargo`,`b`.`WidthCargo` AS `WidthCargo`,`b`.`HighCargo` AS `HighCargo`,`b`.`VolumeCargo` AS `VolumeCargo`,`b`.`CAW` AS `CAW`,`b`.`StorageRoom` AS `StorageRoom`,`b`.`DG` AS `DG`,`b`.`KindOfCode` AS `KindOfCode`,`b`.`KindOfNature` AS `KindOfNature`,`b`.`BuildUpFlag` AS `BuildUpFlag` from (`eks_weighingheader` `a` join `eks_weighingdetail` `b` on(`a`.`ProofNumber` = `b`.`ProofNumber`))
        SQL;
    }

    private function dropView()
    {
        return <<<'SQL'
            DROP VIEW IF EXISTS `eks_weighing_view`;
        SQL;
    }
}
