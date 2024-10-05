<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImpInvoiceViewView extends Migration
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
            CREATE VIEW `imp_invoice_view` AS select `a`.`InvoiceNumber` AS `InvoiceNumber`,`a`.`TotalPieces` AS `TotalPieces`,`a`.`TotalCAW` AS `TotalCAW`,`a`.`TotalNetto` AS `TotalNetto`,`a`.`TotalWarehouseFee` AS `TotalWarehouseFee`,`a`.`TotalAssistancyFee` AS `TotalAssistancyFee`,`a`.`TotalCoolRoomFee` AS `TotalCoolRoomFee`,`a`.`TotalAirConditioningFee` AS `TotalAirConditioningFee`,`a`.`TotalColdStorageFee` AS `TotalColdStorageFee`,`a`.`TotalStrongRoomFee` AS `TotalStrongRoomFee`,`a`.`TotalDangerousRoomFee` AS `TotalDangerousRoomFee`,`a`.`TotalOtherFee` AS `TotalOtherFee`,`a`.`TotalAirportContriFee` AS `TotalAirportContriFee`,`a`.`AdministrationFee` AS `AdministrationFee`,`a`.`DocumentFee` AS `DocumentFee`,`a`.`SubTotalFee` AS `SubTotalFee`,`a`.`TaxFee` AS `TaxFee`,`a`.`StampFee` AS `StampFee`,`a`.`GrandTotalFee` AS `GrandTotalFee`,`a`.`EmployeeNumber` AS `EmployeeNumber`,`a`.`DateOfTransaction` AS `DateOfTransaction`,`a`.`TimeOfTransaction` AS `TimeOfTransaction`,`a`.`PrintNumber` AS `PrintNumber`,`a`.`DRSCNumber` AS `DRSCNumber`,`a`.`AirlinesCode` AS `AirlinesCode`,`a`.`PaymentCode` AS `PaymentCode`,`a`.`AgreementCode` AS `AgreementCode`,`a`.`KursIDR` AS `KursIDR`,`a`.`Referensi` AS `Referensi`,`a`.`TaxNumber` AS `TaxNumber`,`a`.`CustomerCode` AS `CustomerCode`,`a`.`ShiftCode` AS `ShiftCode`,`a`.`ClearanceType` AS `ClearanceType`,`a`.`SPPB` AS `SPPB`,`a`.`void` AS `Void`,`b`.`noid` AS `Noid`,`b`.`DeliveryOrderNumber` AS `DeliveryOrderNumber`,`b`.`MasterAWB` AS `MasterAWB`,`b`.`HostMAWB` AS `HostMAWB`,`b`.`Pieces` AS `Pieces`,`b`.`CAW` AS `CAW`,`b`.`Netto` AS `Netto`,`b`.`WarehouseFee` AS `WarehouseFee`,`b`.`AssistancyFee` AS `AssistancyFee`,`b`.`CoolRoomFee` AS `CoolRoomFee`,`b`.`AirConditioningFee` AS `AirConditioningFee`,`b`.`ColdStorageFee` AS `ColdStorageFee`,`b`.`StrongRoomFee` AS `StrongRoomFee`,`b`.`DangerousRoomFee` AS `DangerousRoomFee`,`b`.`OtherFee` AS `OtherFee`,`b`.`AirportContriFee` AS `AirportContriFee`,`b`.`OverStay` AS `OverStay` from (`imp_invoicedetail` `b` join `imp_invoiceheader` `a` on(`a`.`InvoiceNumber` = `b`.`InvoiceNumber`))
        SQL;
    }

    private function dropView()
    {
        return <<<SQL
            DROP VIEW IF EXISTS `imp_invoice_view`;
        SQL;
    }
}
