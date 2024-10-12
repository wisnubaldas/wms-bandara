<?php

use Illuminate\Database\Migrations\Migration;

class CreateIncDoViewView extends Migration
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
            CREATE VIEW `inc_do_view` AS select `a`.`DONumber` AS `DONumber`,`a`.`TotalPieces` AS `TotalPieces`,`a`.`TotalNetto` AS `TotalNetto`,`a`.`TotalVolume` AS `TotalVolume`,`a`.`id_consignee` AS `id_consignee`,`a`.`PICName` AS `PICName`,`a`.`EmployeeNumber` AS `EmployeeNumber`,`a`.`DateOfDeliveryOrder` AS `DateOfDeliveryOrder`,`a`.`TimeOfDeliveryOrder` AS `TimeOfDeliveryOrder`,`a`.`PrintNumber` AS `PrintNumber`,`a`.`invoicenumber` AS `InvoiceNumber`,`a`.`ShiftCode` AS `ShiftCode`,`a`.`DateOfOut` AS `DateOfOut`,`a`.`void` AS `Void`,`b`.`_id` AS `_id`,`b`.`id_breakdown` AS `id_breakdown`,`b`.`FlightDate` AS `FlightDate`,`b`.`MasterAWB` AS `MasterAWB`,`b`.`Parsial` AS `Parsial`,`b`.`AirlinesCode` AS `AirlinesCode`,`b`.`FlightNumber` AS `FlightNumber`,`b`.`OriginCode` AS `OriginCode`,`b`.`DateOfBreakdown` AS `DateOfBreakdown`,`b`.`Pieces` AS `Pieces`,`b`.`Netto` AS `Netto`,`b`.`Volume` AS `Volume`,`b`.`KindOfCode` AS `KindOfCode`,`b`.`KindOfGood` AS `KindOfGood`,`b`.`StorageRoom` AS `StorageRoom`,`b`.`DG` AS `DG`,`b`.`Location` AS `Location` from (`inc_deliorderheader` `a` join `inc_deliorderdetail` `b` on(`a`.`_id` = `b`.`id_header`))
        SQL;
    }

    private function dropView()
    {
        return <<<'SQL'
            DROP VIEW IF EXISTS `inc_do_view`;
        SQL;
    }
}
