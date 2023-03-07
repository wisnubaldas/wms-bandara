<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Models\Warehouse\EksInvoiceheader;
use App\Models\Warehouse\FareDirectory;

/**
 * Class EksInvoiceHeaderTransformer.
 *
 * @package namespace App\Transformers;
 */
class EksInvoiceHeaderTransformer extends TransformerAbstract
{
    private function cek_customer($props,$customer)
    {
        if($props->detail->relationLoaded($customer)){
            return $props->customer;
        }
        return null;
    }
    private function cek($props,...$cekNya){
        switch (count($cekNya)) {
            case 1:
                    if($props->detail->relationLoaded($cekNya[0])){
                        return $props->detail->weighing;
                    }
                break;
            case 2:
                if($props->detail->relationLoaded($cekNya[1])){
                    if($props->detail->{$cekNya[0]}->relationLoaded($cekNya[1])){
                        return $props->detail->weighing->dtl_weigh;
                    }
                }
                break;
        }
        return null;
    }
    /**
     * Transform the EksInvoiceHeader entity.
     *
     * @param \App\Entities\EksInvoiceHeader $model
     *
     * @return array
     */
    public function transform(EksInvoiceheader $model)
    {
        $weighing = $this->cek($model,'weighing');
        $weighing_dtl = $this->cek($model,'weighing','dtl_weigh');
        $customer = $this->cek_customer($model,'customer');
        return [
            'COMPANY' => env('APP_UNIT'),
            'CUSTUMER_CODE' => (string)$model->CustomerCode,
            'NO_INVOICE' =>  (string) $model->InvoiceNumber,
            'TANGGAL' => (string) $model->DateOfTransaction." ".$model->TimeOfTransaction,
            'PAYMENT_CODE' => (string)$model->PaymentCode,
            'SMU' => (string) $model->detail->MasterAWB,
            'HAWB' => (string)$model->detail->HostMAWB,
            'KDAIRLINE' => (string)$model->AirlinesCode,
            'FLIGHT_NUMBER' => $weighing?$weighing->FlightNumber:null,
            'DOM_INT' => 'I',
            'INC_OUT' => 'O',
            'ASAL' =>  $weighing?$weighing->Origin:null,
            'TUJUAN' => $weighing?$weighing->Destination:null,
            'JENIS_KARGO' => $weighing_dtl?$weighing_dtl->KindOfNature:null,
            'TARIF_KARGO' => (integer) FareDirectory::wh_fee_export($model->InvoiceNumber)->valueitem,
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
            'CSC_FEE' => (float)$model->detail->OtherFee,
            'ENVIROTAINER_ELEC_FEE' => 0,
            'ADDITIONAL_COSTS' => (float)$model->detail->AirportContriFee,
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
            'AGREEMENT'=> (string)$model->AgreementCode,
            'EDC_FEE'=>0,
            'EDC_NAME'=>'ANY',
            'CUSTOMER_NAME'=>(string)$customer?$customer->CompanyName:null,
            'CUSTOMER_ADDRESS'=>(string)$customer?$customer->Address1:null,
            'CUSTOMER_NPWP_NIK'=>(string)$customer?$customer->NPWPNumber:null,
            'COMPANY_CODE'=>(string)$customer?$customer->CustomerCode:null,
            'AIRPORT_CONTRIBUTION_FEE'=>0,
            'VOID' => (boolean)$model->void,
        ];
    }
}
