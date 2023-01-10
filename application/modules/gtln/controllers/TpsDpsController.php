<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TpsDpsController extends MX_Controller
{
    public $wsdl = 'https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL';
    public $setting;
    private $client;
    public $username = "BPKU";
    public $password = "TPSBPKU456";//"tpsbpku456";
    public function __construct()
    {
        $this->dbread  = $this->load->database('tpsonline_gtln_read', true);
        $this->tps = Modules::load('api/tpsController');
        $this->tps->wsdl = "https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL";
        $this->tps->username = "BPKU";
        $this->tps->password = "TPSBPKU456";//"tpsbpku456";
        $this->setting = array(       
            'stream_context'=> stream_context_create(array('ssl'=> array(
            'verify_peer'=>false,
            'verify_peer_name'=>false, 
            'allow_self_signed' => true 
                    )
                )
            )
        );
        $this->client = new SoapClient($this->wsdl, $this->setting);
        parent::__construct();
         $this->load->model(['mohon_plp_model'=>'m_plp','mohon_plp_detail_model'=>'m_plp_det','bongkar_muat_model'=>'m_bomu',
                            'laporan_yor_model'=>'m_yor','impor_gate_in_model'=>'m_gate_in',
                            'impor_gate_out_model'=>'m_gate_out','mohon_resp_plp_model'=>'m_respon_plp',
                            'mohon_resp_plp_det_model'=>'m_respon_plp_det','mohon_resp_plp_tuj'=>'resp_tujuan','mohon_resp_plp_tuj_det'=>'resp_tujuan_det']);
        $this->load->model(['batal_plp'=>'btl_plp','batal_plp_detail'=>'batal_detail',
        'batal_plp_respon'=>'respon_batal_plp','batal_plp_respon_detail'=>'btl_plp_res_det']);
                            $this->load->helper('file');
    }

    private function ref_num($num)
    {
        $num = mt_rand(100000, 999999);
        $refnum = "BPKU".date('ymd').str_pad($num, 6,'0',STR_PAD_LEFT);
        return $refnum;
    }
    private function __filexml($data)
    {
            if ( ! write_file(APPPATH.'modules/api/respon_xml/gtln/'.strtotime('now').'.txt', $data))
            {
                    echo APPPATH.'modules/api/respon_xml/gtln/'.strtotime('now').'.txt';
            }
            else
            {
                    echo 'File written!';
            }
    }
    public function index()
    {
        $datax = $this->m_plp
                            ->with_plp_detail()
                            ->where('kd_kantor =','080100')
                            ->where('flag_transfer',1)
                            ->get_all();
        dd($datax);
    }
    // public function mohon_batal_plp()
    // {
    //     $datax = $this->batal_plp
    //                     ->where('flag_transfer',1)
    //                     ->with_batal_detail()
    //                     ->get();
    //         if (!$datax)
    //         {
    //             echo 'data kosong';
    //             exit();
    //         }
    //         print_r($datax);

    //      $result = $this->tps->UploadBatalPLP($datax);
    //      $result->UploadBatalPLPResult ? $result->UploadBatalPLPResult : exit();
    //      // http://149.129.214.112/tps/gtln/tpsGtlnController/mohon_batal_plp?ref_num=GATR180421000013&no_plp=3123&tgl_plp=20180909&alasan=salahnomerhouse
    //      $this->__filexml($result->UploadBatalPLPResult);
    //      $xml = simplexml_load_string($result->UploadBatalPLPResult);
    //      if(isset($xml->GAGAL))
    //      {
    //          $kd_respon = (array)$xml->GAGAL->KD_RES;
    //          $id = $this->batal_plp
    //                     ->set(['flag_transfer'=>3,'KD_RES'=>implode(",",$kd_respon)])
    //                     ->where('ref_number',$datax['ref_number'])
    //                     ->update();
    //      }else{
    //          echo "sukses batal respon";
    //      }
    // }

    public function plp_kemasan()
    {
        $datax = $this->m_plp
                            ->with_plp_detail()
                            ->where('kd_kantor =','080100')
                            ->where('flag_transfer',1)
                            ->get();
        // print_r($datax);
        if(!$datax)
        {
        	dd('data kosong');
        }

        $ref_number = $this->ref_num($datax['id_mohon']);
        $data = array_merge($datax,compact('ref_number'));
        $xml = Modules::load('api/xmlController');
        $xml =  $xml->xml_plp_gtln($data);
        dump($xml);

        $param = array("Username"=>$this->username,"Password"=>$this->password,"fStream" =>$xml);
        try{
            $respon = $this->client
                             ->__soapCall("UploadMohonPLP",array("UploadMohonPLP" => $param));
                             dump($respon);
            $this->__filexml($respon->UploadMohonPLPResult);
                if($respon->UploadMohonPLPResult)
                {
                    if (strpos($respon->UploadMohonPLPResult, 'Proses Berhasil') !== false) {
                         $update_data = array('ref_number'=>$ref_number,'KD_RES'=>(string)$respon->UploadMohonPLPResult,'flag_transfer'=>2);
                        $this->m_plp->where('id_mohon',$data['id_mohon'])->update($update_data);
                    }else{
                        $xml = simplexml_load_string($respon->UploadMohonPLPResult);
                        // print_r((string)$xml->GAGAL->KD_RES);
                        $update_data = array('ref_number'=>$ref_number,'KD_RES'=>(string)$xml->GAGAL->KD_RES,'flag_transfer'=>3);
                        $this->m_plp->where('id_mohon',$data['id_mohon'])->update($update_data);
                        dump((string)$respon->UploadMohonPLPResult);
                    }
                   
                }

        }catch(SoapFault $exception){
                return show_error($exception->faultstring,404,'Soap Error');
        }
        $this->m_plp->reset_connection();
        
    }

    public function get_respon_plp_tujuan()
    {
        // http://149.129.214.112/tps/gtln/tpsDpsController/get_respon_plp_tujuan?kd_gudang=GBGD
        $kd_asp = $this->input->get('kd_gudang');
        if(!isset($kd_asp))
        {
            dd('mana kode gudangnya');
        }
        $respon = $this->tps->GetResponPLP_Tujuan($kd_asp);
        dump($respon);
        // $this->__filexml($respon->GetResponPLPTujuanResult);
        if(strpos($respon->GetResponPLPTujuanResult, 'tidak ditemukan') == false)
            {

                $xml = simplexml_load_string($respon->GetResponPLPTujuanResult);
                $dh = $xml->RESPONPLP->HEADER;
                $dd = $xml->RESPONPLP->DETIL->KMS;
                $kd_kantor = $dh->KD_KANTOR; 
                $kd_tps_asal = $dh->KD_TPS_ASAL; 
                $kd_tps_tujuan = $dh->KD_TPS_TUJUAN;
                $ref_number = $dh->REF_NUMBER;
                $gudang_asal = $dh->GUDANG_ASAL; 
                $gudang_tujuan = $dh->GUDANG_TUJUAN;
                $no_plp = $dh->NO_PLP;
                $tgl_plp = $dh->TGL_PLP; 
                $alasan_reject = $dh->ALASAN_REJECT;
                $call_sign = $dh->CALL_SIGN;
                $nm_angkut = $dh->NM_ANGKUT; 
                $no_voy_flight = $dh->NO_VOY_FLIGHT;
                $tgl_tiba = $dh->TGL_TIBA;
                $no_bc11 = $dh->NO_BC11;
                $tgl_bc11 = $dh->TGL_BC11;
                $no_surat = $dh->NO_SURAT;
                $tgl_surat = $dh->TGL_SURAT;
                $data = compact('kd_kantor','kd_tps_asal','kd_tps_tujuan','ref_number','gudang_asal','gudang_tujuan','no_plp','tgl_plp','alasan_reject','call_sign','nm_angkut','no_voy_flight','tgl_tiba','no_bc11','tgl_bc11','no_surat','tgl_surat','detail_plp','status');
                $id = $this->resp_tujuan->insert($data);
                $jns_kms = $dd->JNS_KMS;
                $jml_kms = $dd->JML_KMS;
                $no_bl_awb = $dd->NO_BL_AWB;
                $tgl_bl_awb = $dd->TGL_BL_AWB;
                $no_pos_bc11 = $dd->NO_POS_BC11;
                $fl_setuju = $dd->FL_SETUJU;
                $id_header = $id;
                $ditail = compact('no_pos_bc11','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb','fl_setuju','id_header');
                $this->resp_tujuan_det->insert($ditail);

                $update_data = array('flag_transfer'=>10);
                $this->m_plp->where('ref_number',$ref_number)->update($update_data);
            }
    }
    public function get_respon_plp()
    {
      // http://149.129.214.112/tps/gtln/tpsDpsController/get_respon_plp?kd_gudang=GBGD
        $kd_asp = $this->input->get('kd_gudang');
        if(!isset($kd_asp))
        {
            dd('mana kode gudangnya');
        }
        $respon = $this->tps->GetResponPLP($kd_asp);
        dump($respon);
        // $this->__filexml($respon->GetResponPLPResult);
        if(strpos($respon->GetResponPLPResult, 'tidak ditemukan') == false)
            {

                $xml = simplexml_load_string($respon->GetResponPLPResult);
                $dh = $xml->RESPONPLP->HEADER;
                $dd = $xml->RESPONPLP->DETIL->KMS;
                $kd_kantor = $dh->KD_KANTOR; 
                $kd_tps_asal = $dh->KD_TPS_ASAL; 
                $kd_tps_tujuan = $dh->KD_TPS_TUJUAN;
                $ref_number = $dh->REF_NUMBER;
                $gudang_asal = $dh->GUDANG_ASAL; 
                $gudang_tujuan = $dh->GUDANG_TUJUAN;
                $no_plp = $dh->NO_PLP;
                $tgl_plp = $dh->TGL_PLP; 
                $alasan_reject = $dh->ALASAN_REJECT;
                $call_sign = $dh->CALL_SIGN;
                $nm_angkut = $dh->NM_ANGKUT; 
                $no_voy_flight = $dh->NO_VOY_FLIGHT;
                $tgl_tiba = $dh->TGL_TIBA;
                $no_bc11 = $dh->NO_BC11;
                $tgl_bc11 = $dh->TGL_BC11;
                $no_surat = $dh->NO_SURAT;
                $tgl_surat = $dh->TGL_SURAT;
                $data = compact('kd_kantor','kd_tps_asal','kd_tps_tujuan','ref_number','gudang_asal','gudang_tujuan','no_plp','tgl_plp','alasan_reject','call_sign','nm_angkut','no_voy_flight','tgl_tiba','no_bc11','tgl_bc11','no_surat','tgl_surat','detail_plp','status');
                $id = $this->m_respon_plp->insert($data);
                $jns_kms = $dd->JNS_KMS;
                $jml_kms = $dd->JML_KMS;
                $no_bl_awb = $dd->NO_BL_AWB;
                $tgl_bl_awb = $dd->TGL_BL_AWB;
                $fl_setuju = $dd->FL_SETUJU;
                $id_header = $id;
                $ditail = compact('detail_plp','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb','fl_setuju','id_header');
                $this->m_respon_plp_det->insert($ditail);
                $update_data = array('flag_transfer'=>10);
                $this->m_plp->where('ref_number',$ref_number)->update($update_data);
            }
    }
    public function get_respon_plp_ondemand()
    {
        // http://149.129.214.112/tps/gtln/tpsDpsController/get_respon_plp_ondemand?ref_number=GATR180426000033,KdGudang=GGGG,no_Plp=1234,Tgl_plp=20120303
        $RefNumber = $this->input->get('ref_number');
        $KdGudang = $this->input->get('KdGudang');
        $no_Plp = $this->input->get('no_Plp');
        $Tgl_plp = $this->input->get('Tgl_plp');
        if($RefNumber == null || $RefNumber == '')
        {
           dd('data kosong');
        }

        $data = compact('RefNumber','KdGudang','no_plp','Tgl_plp');
        $respon = $this->tps->GetResponPLP_onDemand($data);
            dump($respon);
            $this->__filexml($respon->GetResponPlp_onDemandsResult);
            if(strpos($respon->GetResponPlp_onDemandsResult, 'tidak ditemukan') == false)
            {

                $xml = simplexml_load_string($respon->GetResponPlp_onDemandsResult);
                $dh = $xml->RESPONPLP->HEADER;
                $dd = $xml->RESPONPLP->DETIL->KMS;
                $kd_kantor = $dh->KD_KANTOR; 
                $kd_tps_asal = $dh->KD_TPS_ASAL; 
                $kd_tps_tujuan = $dh->KD_TPS_TUJUAN;
                $ref_number = $dh->REF_NUMBER;
                $gudang_asal = $dh->GUDANG_ASAL; 
                $gudang_tujuan = $dh->GUDANG_TUJUAN;
                $no_plp = $dh->NO_PLP;
                $tgl_plp = $dh->TGL_PLP; 
                $alasan_reject = $dh->ALASAN_REJECT;
                $call_sign = $dh->CALL_SIGN;
                $nm_angkut = $dh->NM_ANGKUT; 
                $no_voy_flight = $dh->NO_VOY_FLIGHT;
                $tgl_tiba = $dh->TGL_TIBA;
                $no_bc11 = $dh->NO_BC11;
                $tgl_bc11 = $dh->TGL_BC11;
                $no_surat = $dh->NO_SURAT;
                $tgl_surat = $dh->TGL_SURAT;
                $data = compact('kd_kantor','kd_tps_asal','kd_tps_tujuan','ref_number','gudang_asal','gudang_tujuan','no_plp','tgl_plp','alasan_reject','call_sign','nm_angkut','no_voy_flight','tgl_tiba','no_bc11','tgl_bc11','no_surat','tgl_surat','detail_plp','status');
                $id = $this->m_respon_plp->insert($data);
                $jns_kms = $dd->JNS_KMS;
                $jml_kms = $dd->JML_KMS;
                $no_bl_awb = $dd->NO_BL_AWB;
                $tgl_bl_awb = $dd->TGL_BL_AWB;
                $fl_setuju = $dd->FL_SETUJU;
                $id_header = $id;
                $ditail = compact('detail_plp','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb','fl_setuju','id_header');
                $this->m_respon_plp_det->insert($ditail);
                
                $update_data = array('flag_transfer'=>10);
                $this->m_plp->where('ref_number',$ref_number)->update($update_data);
            }
    }
    public function batal_plp()
    {
        //http://149.129.214.112/tps/gtln/tpsDpsController/batal_plp
        $data = $this->btl_plp
                    ->with_batal_detail()
                    ->where('kd_kantor =','080100')
                    ->where('flag_transfer',1)->get();
        $ref = $this->ref_num($data['id_batal']);
        if(!$data)
        {
        	dd('data kosong');
        }else{
            $data = array_merge($data,['ref_number'=>$ref]);
            $respon = $this->tps->UploadBatalPLP($data);
            if($respon)
            {
                $update_data = array('flag_transfer'=>2,
                                    'respon_batal'=>$respon->UploadBatalPLPResult,
                                    'ref_number'=>$ref);
                $this->btl_plp->where('id_batal',$data['id_batal'])->update($update_data);
            }
        }
       
    }
    public function get_respon_batal_plp()
    {
        // 149.129.214.112/tps/bgd/tpsBgdController/get_respon_batal_plp?kd_asp=XXXXXXX
        $kd_asp = $this->input->get('kd_asp');
        if(isset($kd_asp))
        {
            $respon = $this->tps->GetResponBatalPLP($kd_asp);
            // $this->createFileBatal($respon->GetResponBatalPLPResult);
            print_r($respon->GetResponBatalPLPResult);
        }else{
            echo "set kode asp..??";
        }
    }
    public function get_respon_batal_plp_tujuan()
    {
        // 149.129.214.112/tps/bgd/tpsBgdController/get_respon_batal_plp_tujuan?kd_asp=XXXXXXX
        $kd_asp = $this->input->get('kd_asp');
        if(isset($kd_asp))
        {
            $respon = $this->tps->GetResponBatalPLP_Tujuan($kd_asp);
            // $this->createFileBatal($respon->GetResponBatalPLPTujuanResult);
            print_r($respon->GetResponBatalPLPTujuanResult);
            
        }else{
            echo "set kode asp..??";
        }
    }
    public function get_respon_batal_plp_demand()
    {
         // http://149.129.214.112/tps/bgd/tpsBgdController/get_respon_batal_plp_demand?ref_num=BGD1180628488552
         $ref_num = $this->input->get('ref_num');
         if (isset($ref_num)) { 
             $respon = $this->tps->GetResponBatalPLP_onDemand($ref_num);
             if($respon->GetResponBatalPlp_onDemandsResult == 'Data tidak ditemukan')
             {
                dd($respon);
             }else{
                $xml = simplexml_load_string($respon->GetResponBatalPlp_onDemandsResult);
                dump(json_encode($xml));
                $kd_kantor = $xml->RESPONPLP->HEADER->KD_KANTOR;
                $kd_tps_asal = $xml->RESPONPLP->HEADER->KD_TPS_ASAL;
                $kd_tps_tujuan = $xml->RESPONPLP->HEADER->KD_TPS_TUJUAN;
                $ref_number = $xml->RESPONPLP->HEADER->REF_NUMBER;
                $gudang_asal = $xml->RESPONPLP->HEADER->GUDANG_ASAL;
                $gudang_tujuan = $xml->RESPONPLP->HEADER->GUDANG_TUJUAN;
                $no_plp  = $xml->RESPONPLP->HEADER->NO_PLP;
                $tgl_plp = $xml->RESPONPLP->HEADER->TGL_PLP;
                $no_batal_plp = $xml->RESPONPLP->HEADER->NO_BATAL_PLP;
                $tgl_batal_plp = $xml->RESPONPLP->HEADER->TGL_BATAL_PLP;
                $alasan_batal = $xml->RESPONPLP->HEADER->ALASAN_BATAL;
                $data = compact('kd_kantor','kd_tps_asal','kd_tps_tujuan','ref_number','gudang_asal','gudang_tujuan','no_plp','tgl_plp','no_batal_plp','tgl_batal_plp','alasan_batal');
                $id = $this->respon_batal_plp->insert($data);
                if($id)
                {
                    $id_header = $id;
                    $jns_kms = $xml->RESPONPLP->DETIL->KMS->JNS_KMS;
                    $jml_kms = $xml->RESPONPLP->DETIL->KMS->JML_KMS;
                    $no_bl_awb  = $xml->RESPONPLP->DETIL->KMS->NO_BL_AWB;
                    $tgl_bl_awb = $xml->RESPONPLP->DETIL->KMS->TGL_BL_AWB;
                    $fl_setuju = $xml->RESPONPLP->DETIL->KMS->FL_SETUJU;
                    $det = compact('id_header','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb','fl_setuju');
                    $id = $this->btl_plp_res_det->insert($det);
                }
             }
         } 
         else { 
             dd("ref_num ?");
         } 
    }
    public function laporan_yor()
    {
        $data = $this->m_yor
                    ->with_plp_detail()
                    ->where('kd_kantor =','080100')
                    ->get_all();
        $respon = $this->tps->kirimLaporanYor($data);
        var_dump($respon);
    }
    public function get_info_bc11()
    {
            $date = new DateTime('now');
            $tgl_akhir = $date->format('Ymd');
            $date->modify("-1 days");
            $tgl_tiba = $date->format('Ymd');
            // $date->getTimestamp();
        $respon = $this->tps->GetInfoNomorBC11(compact('tgl_tiba','tgl_akhir'));
        print_r($respon->GetInfoNomorBC11Result);
    }
    public function total_bongkar()
    {
       $data = $this->m_bomu->get_all();
        $respon = $this->tps->TotalRealiasiBongkarMuat($data);
        print_r($respon);
    }

    // gate in gtln
	public function impor_gate_in2(){
		for ($x = 0; $x < 1000; $x++) {
			//$this->client = new SoapClient($this->wsdl, $this->setting);
			$this->impor_gate_in();
			echo "sigit biasa ke : ".$x;
			//sleep(10);
		} 
			//
				
	}
	public function resend_impor_gate_in2(){
		for ($x = 0; $x < 100; $x++) {
			//$this->client = new SoapClient($this->wsdl, $this->setting);
			$this->resend_impor_gate_in();
			
			echo "resend gate in ke : ".$x;
			//sleep(10);
		} 	
			
	}
	function stripper($element)
        {
            return trim($element); // this will remove the whitespace
    }
    public function impor_gate_in()
    {
        $data = $this->m_gate_in
                        ->where('flag_transfer',0)
                        ->where('kode_kantor','080100')
                        ->limit(5)->get_all();
       // dd($data);

        if(!$data)
        {
            echo "data kosong";
            exit();
        }
        $respon = $this->tps->CoarriCodeco_Kemasan($data);
        $respon = $respon->CoarriCodeco_KemasanResult;
        $arr = explode(';',$respon);
        $stripped = array_map(array($this, 'stripper'), $arr);
        $arr2 = array_filter($stripped,'strlen');
        for ($i=0; $i < count($arr2) ; $i++) { 
            if(strpos($arr2[$i], 'Gagal') !== false)
            {
                $upd_dat = ['respon'=>$arr2[$i],'flag_transfer'=>3];
                $this->m_gate_in->where('no_bl_awb',$data[$i]['no_bl_awb'])
                                ->update($upd_dat);
            }
            if(strpos($arr2[$i], 'Berhasil') !== false)
            {
                $ref = explode(' ',$arr2[$i]);
                print_r($ref[3]);
                $upd_dat = ['respon'=>$arr2[$i],'flag_transfer'=>2,'ref_num'=>$ref[3]];
                $this->m_gate_in->where('no_bl_awb',$data[$i]['no_bl_awb'])
                                ->update($upd_dat);
            }

        }
      
    }
	
	public function resend_impor_gate_in()
    {
		
        $data = $this->m_gate_in
                        ->where('flag_transfer',3)
						->where('respon','!=','Gagal Parsing XML')
                        ->where('kode_kantor','080100')
                        ->limit(5)->get_all();
        //dd($data);
		//print_r($data);
		
        if(!$data)
        {
            echo "data kosong";
            //exit();
        }
        
		//print_r($element);
        $respon = $this->tps->CoarriCodeco_Kemasan($data);
        $respon = $respon->CoarriCodeco_KemasanResult;
        $arr = explode(';',$respon);
       // print_r($arr);
		
		//$stripped = array_map("stripper", $arr);
		$stripped = array_map(array($this, 'stripper'), $arr);
        $arr2 = array_filter($stripped,'strlen');
        for ($i=0; $i < count($arr2) ; $i++) { 
            if(strpos($arr2[$i], 'Gagal') !== false)
            {
                $upd_dat = ['respon'=>$arr2[$i],'flag_transfer'=>3];
                $this->m_gate_in->where('no_bl_awb',$data[$i]['no_bl_awb'])
                                ->update($upd_dat);
            }
            if(strpos($arr2[$i], 'Berhasil') !== false)
            {
                $ref = explode(' ',$arr2[$i]);
                print_r($ref[3]);
                $upd_dat = ['respon'=>$arr2[$i],'flag_transfer'=>2,'ref_num'=>$ref[3]];
                $this->m_gate_in->where('no_bl_awb',$data[$i]['no_bl_awb'])
                                ->update($upd_dat);
            }

        }
      
    }
	
    public function impor_gate_out()
    {
        // $query  =   'select * from tpsonline_gtln.get_imp_out where
		// 	        flag_transfer=0  and kode_kantor = "080100" order by id_kms desc limit 100';
        // $data   = $this->dbread->query($query)->result_array();
        $data = $this->m_gate_out->where('flag_transfer',0)
                                    ->where('kode_kantor','080100')
                                    ->limit(200)->get_all();
         dd($data);
        // print_r($data);
        if(!$data)
        {
            echo "data kosong";
            exit();
        }

        function stripper($element)
        {
            return trim($element); // this will remove the whitespace
        }
        $respon = $this->tps->CoarriCodeco_Kemasan($data);

        $respon = $respon->CoarriCodeco_KemasanResult;
        $arr = explode(';',$respon);
        $stripped = array_map("stripper", $arr);
        $arr2 = array_filter($stripped,'strlen');
        for ($i=0; $i < count($arr2) ; $i++) { 
            if(strpos($arr2[$i], 'Gagal') !== false)
            {
                $upd_dat = ['respon'=>$arr2[$i],'flag_transfer'=>3];
                $this->m_gate_out->where('no_bl_awb',$data[$i]['no_bl_awb'])
                                ->update($upd_dat);
            }
            if(strpos($arr2[$i], 'Berhasil') !== false)
            {
                $ref = explode(' ',$arr2[$i]);
                print_r($ref[3]);
                $upd_dat = ['respon'=>$arr2[$i],'flag_transfer'=>2,'ref_num'=>$ref[3]];
                $this->m_gate_out->where('no_bl_awb',$data[$i]['no_bl_awb'])
                                ->update($upd_dat);
            }

        }

    }
    public function get_reject()
    {
        $respon = $this->tps->GetRejectData();
        print_r($respon);
    }
}

/* End of file filename.php */
