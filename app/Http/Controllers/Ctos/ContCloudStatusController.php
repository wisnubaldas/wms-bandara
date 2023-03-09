<?php

namespace App\Http\Controllers\Ctos;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tps\ThInbound;
use App\Models\Tps\ThOutbound;
class ContCloudStatusController extends Controller
{
    public function __construct() {
        $this->outbound = new ThOutbound;
        $this->inbound = new ThInbound;
    }

    public function get_full_Check_Status($tps,$id_first)
    {
        return ThInbound::where('tps',$tps)->where('id_','>=',$id_first)->get();
    }
    public function get_total_inbound_delivery_aircarft($id_header,$status_date,$status_time,$airline_code,$flight_no,$origin,$dest)
    {
        return ThInbound::with(['delivery_aircarft'=>function($query) use ($status_date,$status_time){
            return $query->where('status_date',$status_date)->where('status_time',$status_time);            
            }])
            ->where('airline_code',$airline_code)
            ->where('flight_no',$flight_no)
            ->where('origin',$origin)
            ->where('dest',$dest)
            ->count();
    }
    public function get_check_th_inbound_international($waybill_smu,$hawb=null)
    {
        $this->inbound->where('waybill_smu',$waybill_smu);
        if($hawb){
            $this->inbound->where('hawb',$hawb);
        }
        $this->inbound->limit(10);
        return $this->inbound->get();
    }
    public function get_check_th_outbond_international($waybill_smu,$hawb=null)
    {
        $this->outbound->where('waybill_smu',$waybill_smu);
        if($hawb){
            $this->outbound->where('hawb',$hawb);
        }
        $this->outbound->limit(10);
        return $this->outbound->get();
    }
    
    public function get_check_th_inbound_domestik($waybill_smu,$hawb=null)
    {
        $this->inbound->where('waybill_smu',$waybill_smu);
        if($hawb){
            $this->inbound->where('hawb',$hawb);
        }
        $this->inbound->limit(10);
        return $this->inbound->get();
    }
    public function get_check_th_outbond_domestik($waybill_smu,$hawb=null)
    {
        $this->outbound->where('waybill_smu',$waybill_smu);
        if($hawb){
            $this->outbound->where('hawb',$hawb);
        }
        $this->outbound->limit(10);
        return $this->outbound->get();
    }
    public function get_update_dinamis($namatable,$namafield,$isifield,$namacode,$nilaicode)
    {
        $data = array(
			$namafield => $isifield
		);
		$this->db30->where($namacode,$nilaicode);	
		$this->db30->update($namatable,$data);
    }
}
