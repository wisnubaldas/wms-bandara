<?php

namespace App\Domain;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
class ErpNextDomain
{

    public $url = 'https://mai.erp-next.id/api/method/ctoserp.ctoserp.invoiceCTOS';
    public function response_handle($r)
    {
        if($r->successful()){
            Log::debug($r->body());
        }else {
            $r->onError(function($callback)
            {
                Log::error($callback);
            });
        }
    }
    public function post_data($data)
    {
        if($data)
            foreach ($data as $v) {
                $response = Http::post($this->url, (array)$v);
                echo $response->status();
                
                $this->response_handle($response);
                Log::info($v->NO_INVOICE,(array)$v);
                dump($response->body());
            }
    }
    static public function send()
    {
        $dt = Carbon::now('Asia/Jakarta');
        $tanggal = $dt->toDateString();
        $end_date = $dt->toTimeString();
        $start_date = $dt->subHour(1)->toTimeString();

        $run = new ErpNextDomain;
        $import = $run->imp_pros($tanggal, $start_date, $end_date);
        $dataSend = $run->schemax($import,'I');
        $run->post_data($dataSend);
        $export = $run->exp_pros($tanggal, $start_date, $end_date);
        $dataSend = $run->schemax($export,'E');
        $run->post_data($dataSend);
    }
    protected function schemax($data,$INC_OUT)
    {
        $result = [];
        foreach ($data as $v) {
            $datax = [
                    'COMPANY' => env('APP_UNIT'),
                    'CUSTUMER_CODE' => $v->CustomerCode,
                    'NO_INVOICE' =>  $v->InvoiceNumber,
                    'TANGGAL' => $v->DateOfTransaction.' '.$v->TimeOfTransaction,
                    'PAYMENT_CODE' => $v->PaymentCode,
                    'SMU' => $v->MasterAWB,
                    'HAWB' => $v->HostMAWB,
                    'KDAIRLINE' => $v->AirlinesCode,
                    'FLIGHT_NUMBER' => $v->FlightNumber,
                    'DOM_INT' => 'I',
                    'INC_OUT' => $INC_OUT,
                    'ASAL' =>  $v->OriginCode,
                    'TUJUAN' => ($INC_OUT == 'I')?'IDCGK':$v->Destination,
                    'JENIS_KARGO' => $v->KindOfGood,
                    'TARIF_KARGO' => (integer)$v->tarif_kargo,
                    'KOLI' => (integer)$v->TotalPieces,
                    'BERAT' => (integer)$v->TotalNetto,
                    'VOLUME' => (integer)$v->TotalCAW,
                    'JML_HARI' => (integer)$v->OverStay,
                    'CARGO_CHG' => (integer)$v->WarehouseFee,
                    'KADE' => (integer)$v->TotalAssistancyFee,
                    'TOTAL_PENDAPATAN_TANPA_PPN' => (integer)$v->SubTotalFee,
                    'TOTAL_PENDAPATAN_DENGAN_PPN' => (integer)$v->GrandTotalFee,
                    'PJT_HANDLING_FEE' => 0,
                    'RUSH_HANDLING_FEE' => 0,
                    'RUSH_SERVICE_FEE' => 0,
                    'TRANSHIPMENT_FEE' => 0,
                    'ADMINISTRATION_FEE' => (integer)$v->AdministrationFee,
                    'DOCUMENTS_FEE' => (integer)$v->DocumentFee,
                    'PECAH_PU_FEE' => (integer)$v->Totalpecahpos,
                    'COOL_COLD_STORAGE_FEE' => (integer)$v->ColdStorageFee,
                    'STRONG_ROOM_FEE' => (integer)$v->StrongRoomFee,
                    'AC_ROOM_FEE' => (integer)$v->AirConditioningFee,
                    'DG_ROOM_FEE' => (integer)$v->DangerousRoomFee,
                    'AVI_ROOM_FEE' => 0,
                    'DANGEROUS_GOOD_CHECK_FEE' => 0,
                    'DISCOUNT_FEE' => 0,
                    'RKSP_FEE' => 0,
                    'HAWB_FEE' => 0,
                    'HAWB_MAWB_FEE' => 0,
                    'CSC_FEE' => (integer)$v->OtherFee,
                    'ENVIROTAINER_ELEC_FEE' => 0,
                    'ADDITIONAL_COSTS' => (integer)$v->AirportContriFee,
                    'NAWB_FEE' => 0,
                    'BARCODE_FEE' => 0,
                    'CARGO_DEVELOPMENT_FEE' => 0,
                    'DUTIABLE_SHIPMENT_FEE' => 0,
                    'FHL_FEE' => 0,
                    'FWB_FEE' => 0,
                    'CARGO_INSPECTION_REPORT_FEE' => 0,
                    'MATERAI_FEE' => (integer)$v->StampFee,
                    'PPN_FEE' => (integer)$v->TaxFee,
                    'PAYMENT_TYPE'=>$v->PaymentCode,
                    'AGREEMENT'=> "BASIC",
                    'EDC_FEE'=>0,
                    'EDC_NAME'=>0,
                    'CUSTOMER_NAME'=>$v->company,
                    'CUSTOMER_ADDRESS'=>$v->address,
                    'CUSTOMER_NPWP_NIK'=>$v->npwp,
                    'COMPANY_CODE'=>$v->CustomerCode,
                    'AIRPORT_CONTRIBUTION_FEE'=>0,
                    'VOID' => (boolean)$v->void,
            ];
            array_push($result, (object) $datax);
        }
        return $result;
    }
    protected function exp_pros($tanggal,$start_date,$end_date)
    {
        return DB::connection('rdwarehouse_jkt')
                ->select('CALL send_inv_exp(?,?,?)',array($tanggal,$start_date,$end_date));
    }
    protected function imp_pros($tanggal,$start_date,$end_date)
    {
        return DB::connection('rdwarehouse_jkt')
                ->select('CALL send_invoice_imp(?,?,?)',array($tanggal,$start_date,$end_date));
    }
}
