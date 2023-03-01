<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Warehouse\ImpInvoiceheader;
use App\Models\Warehouse\FareDirectory;
/**
 * Class InvoiceErpTransformer.
 *
 * @package namespace App\Transformers;
 */
class InvoiceErpTransformer extends TransformerAbstract
{
    private function cek($obj)
    {
        if(property_exists($obj)){
            return $obj;
        }
        return '';
    }
    /**
     * Transform the InvoiceErp entity.
     *
     * @param \App\Entities\InvoiceErp $model
     *
     * @return array
     */
    public function transform(ImpInvoiceheader $model)
    {
        return [
            'COMPANY' => env('APP_UNIT'),
            'CUSTUMER_CODE' => (string)$model->CustomerCode,
            'NO_INVOICE' =>  (string) $model->InvoiceNumber,
            'TANGGAL' => (string) $model->DateOfTransaction." ".$model->TimeOfTransaction,
            'PAYMENT_CODE' => (string)$model->PaymentCode,
            'SMU' => (string) $model->detail->MasterAWB,
            'HAWB' => (string)$model->detail->HostMAWB,
            'KDAIRLINE' => (string)$model->AirlinesCode,
            'FLIGHT_NUMBER' => $model->detail->do?$model->detail->do->FlightNumber:null,
            'DOM_INT' => 'I',
            'INC_OUT' => 'I',
            'ASAL' =>  $model->detail->do?$model->detail->do->OriginCode:null,
            'TUJUAN' => 'IDCGK',
            'JENIS_KARGO' => $model->detail->do?$model->detail->do->KindOfGood:null,
            'TARIF_KARGO' => (integer) FareDirectory::wh_fee($model->InvoiceNumber)->valueitem,
            'KOLI' => (float)$model->TotalPieces,
            'BERAT' => (float)$model->TotalNetto,
            'VOLUME' => (float)$model->TotalCAW,
            'JML_HARI' => (integer)$model->detail->OverStay,
            'CARGO_CHG' => (float)$model->detail->WarehouseFee,
            'KADE' => (float)$model->TotalAssistancyFee,
            'TOTAL_PENDAPATAN_TANPA_PPN' => (float)$model->SubTotalFee,
            'TOTAL_PENDAPATAN_DENGAN_PPN' => (float)$model->GrandTotalFee,
            'PJT_HANDLING_FEE' => 0,
            'RUSH_HANDLING_FEE' => 0,
            'RUSH_SERVICE_FEE' => 0,
            'TRANSHIPMENT_FEE' => 0,
            'ADMINISTRATION_FEE' => (float)$model->AdministrationFee,
            'DOCUMENTS_FEE' => (float)$model->DocumentFee,
            'PECAH_PU_FEE' => 0,
            'COOL_COLD_STORAGE_FEE' => (float)$model->detail->ColdStorageFee,
            'STRONG_ROOM_FEE' => (float)$model->detail->StrongRoomFee,
            'AC_ROOM_FEE' => (float)$model->detail->AirConditioningFee,
            'DG_ROOM_FEE' => (float)$model->detail->DangerousRoomFee,
            'AVI_ROOM_FEE' => 0,
            'DANGEROUS_GOOD_CHECK_FEE' => 0,
            'DISCOUNT_FEE' => 0,
            'RKSP_FEE' => 0,
            'HAWB_FEE' => 0,
            'HAWB_MAWB_FEE' => 0,
            'CSC_FEE' => 130,
            'ENVIROTAINER_ELEC_FEE' => 0,
            'ADDITIONAL_COSTS' => 320,
            'NAWB_FEE' => 0,
            'BARCODE_FEE' => 0,
            'CARGO_DEVELOPMENT_FEE' => 0,
            'DUTIABLE_SHIPMENT_FEE' => 0,
            'FHL_FEE' => 0,
            'FWB_FEE' => 0,
            'CARGO_INSPECTION_REPORT_FEE' => 0,
            'MATERAI_FEE' => (float)$model->StampFee,
            'PPN_FEE' => (float)$model->TaxFee,
            'PAYMENT_TYPE'=>(string)$model->PaymentCode,
            'AGREEMENT'=> "BASIC",
            'EDC_FEE'=>0,
            'EDC_NAME'=>0,
            'CUSTOMER_NAME'=>(string)$model->customer->CompanyName,
            'CUSTOMER_ADDRESS'=>(string)$model->customer->Address1,
            'CUSTOMER_NPWP_NIK'=>(string)$model->customer->NPWPNumber,
            'COMPANY_CODE'=>(string)$model->customer->CustomerCode,
            'AIRPORT_CONTRIBUTION_FEE'=>0,
            'VOID' => (boolean)$model->void,
        ];
    }
}
