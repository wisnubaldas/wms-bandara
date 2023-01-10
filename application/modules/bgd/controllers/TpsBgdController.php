<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TpsBgdController extends MX_Controller
{
    public function __construct()
    {
        parent::__construct();
        date_default_timezone_set('Asia/Jakarta');
        $this->load->helper('file');
        $this->tps = Modules::load('api/tpsController');
        $this->tps->wsdl = "https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL";
        $this->tps->username = "BGD1";
        $this->tps->password = "BGD12345";
        $this->load->model(['mohon_plp_model'=>'m_plp','bongkar_muat_model'=>'m_bomu',
                            'laporan_yor_model'=>'m_yor','impor_gate_in_model'=>'m_gate_in',
                            'impor_gate_out_model'=>'m_gate_out','mohon_resp_plp_model'=>'m_respon_plp',
                            'mohon_resp_plp_det_model'=>'m_respon_plp_det',
                            'mohon_resp_plp_tuj'=>'resp_tujuan','mohon_resp_plp_tuj_det'=>'resp_tujuan_det',
                            'batal_plp'=>'btl_plp','batal_plp_detail'=>'batal_detail',
                            'batal_plp_respon'=>'respon_batal_plp','batal_plp_respon_detail'=>'btl_plp_res_det']);
        
    }
    public function test()
    {
        echo newMawb('40679250010'); die;
    }
    private function ref_num($num)
    {
        $num = mt_rand(100000, 999999);
        $refnum = "BGD1".date('ymd').str_pad($num, 6,'0',STR_PAD_LEFT);
        return $refnum;
    }
    private function __filexml($data)
    {
        if ( ! write_file(APPPATH.'modules/api/respon_xml/bgd/'.strtotime('now').'.txt', $data))
        {
                echo APPPATH.'modules/api/respon_xml/bgd/'.strtotime('now').'.txt';
        }
        else
        {
                echo 'File written!';
        }
    }
    public function index()
    {
        print_r($this->tps->wsdl);
    }
    public function plp_kemasan()
    {
        $data = $this->m_plp
                    ->with_plp_detail()
                    ->where('flag_transfer',1)->get();
        if(!$data)
        {
        	echo 'data kosong';
        	exit();
        }

        $ref_number = $this->ref_num($data['id_mohon']);
        $data = array_merge($data,compact('ref_number'));
        $xml = Modules::load('api/xmlController');
        // print_r($xml->xml_plp_kemasan([$data]));

        if(!$data)
        {
            show_error('Data plp kosong',404,'Sending PLP');
            exit();
        }
        $respon = $this->tps->mohon_plp([$data]);
        print_r($respon);
        $this->__filexml($respon->UploadMohonPLPResult);
        if($respon->UploadMohonPLPResult)
        {
			if (strpos($respon->UploadMohonPLPResult, 'Proses Berhasil') !== false) {
			     $update_data = array('ref_number'=>$ref_number,'KD_RES'=>(string)$respon->UploadMohonPLPResult,'flag_transfer'=>2);
            	$this->m_plp->where('id_mohon',$data['id_mohon'])->update($update_data);
			}else{
				$xml = simplexml_load_string($respon->UploadMohonPLPResult);
				// print_r((string)$xml->GAGAL->KD_RES);
				$update_data = array('ref_number'=>$ref_number,'KD_RES'=>(string)$respon->UploadMohonPLPResult,'flag_transfer'=>3);
            	$this->m_plp->where('id_mohon',$data['id_mohon'])->update($update_data);
				var_dump((string)$respon->UploadMohonPLPResult);
			}
           
        }
        // // print_r('<pre>'.$respon.'</pre>');
        
    }
    // http://149.129.214.112/tps/bgd/tpsBgdController/get_respon_plp_tujuan?kd_gudang=GBGE
    public function get_respon_plp_tujuan()
    {
        // $kd_asp = $this->input->get('kd_gudang');
       $kd_asp = $this->input->get('kd_gudang');
        if(!isset($kd_asp))
        {
            echo 'mana kode kd_gudang ?';
            exit();
        }
            $respon = $this->tps->GetResponPLP_Tujuan($kd_asp);
            echo json_encode($respon);
            $this->__filexml($respon->GetResponPLPTujuanResult);
            if(strpos($respon->GetResponPLPTujuanResult, 'tidak ditemukan') == false)
            {
                // $content = APPPATH.'modules/api/respon_xml/bgd/1524297580_tes.txt';
                // $content = file_get_contents($content);
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
                $ditail = compact('no_pos_bc11','detail_plp','jns_kms','jml_kms','no_bl_awb','tgl_bl_awb','fl_setuju','id_header');
                $this->resp_tujuan_det->insert($ditail);
                
                $update_data = array('flag_transfer'=>10);
                $this->m_plp->where('ref_number',$ref_number)->update($update_data);
            }   
        
        
    }
    public function get_respon_plp()
    {
        // http://149.129.214.112/tps/bgd/tpsBgdController/get_respon_plp?kd_gudang=GBGE
        $kd_asp = $this->input->get('kd_gudang');
        $respon = $this->tps->GetResponPLP($kd_asp);
       
        if(strpos($respon->GetResponPLPResult, 'tidak ditemukan') == false)
            {
                $this->__filexml($respon->GetResponPLPResult);
                $xml = simplexml_load_string($respon->GetResponPLPResult);
                foreach ($xml->RESPONPLP as $v) {
                    $dh = $v->HEADER;
                    $dd = $v->DETIL->KMS;
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
                    print_r($id);
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

            }else{ print_r($respon);}   

    }

    public function get_respon_plp_ondemand()
    {
        // $date->format('Ymd');
        //  $data = $this->m_plp->where('flag_transfer',2)->get_all();
        $ref = $this->input->get('ref_number');
        $KdGudang = $this->input->get('KdGudang');

         if(!isset($ref) || !isset($KdGudang))
         {
            echo 'data kosong';
            exit();
         }
         $data = ['no_Plp'=>'','Tgl_Plp'=>'','RefNumber'=>$ref,'KdGudang'=>$KdGudang];
        $respon = $this->tps->GetResponPLP_onDemand($data);
            print_r($respon);
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
    
    private function createFileBatal($data)
    {
        if (!write_file(APPPATH.'modules/api/respon_xml/bgd/batal_plp_'.strtotime('now').'.txt', $data))
        {
                echo APPPATH.'modules/api/respon_xml/bgd/batal_plp_'.strtotime('now').'.txt';
        }
        else
        {
                echo 'File written!';
        }
    }

    public function batal_plp()
    {
        // http://149.129.214.112/tps/bgd/tpsBgdController/batal_plp
        $data = $this->btl_plp
                    ->with_batal_detail()
                    ->where('flag_transfer',1)->get();
        $ref = $this->ref_num($data['id_batal']);
        if(!$data)
        {
        	echo 'data kosong';
        	exit();
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
            $this->createFileBatal($respon->GetResponBatalPLPResult);
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
            $this->createFileBatal($respon->GetResponBatalPLPTujuanResult);
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
                print_r($respon);
                exit();
             }else{
                $xml = simplexml_load_string($respon->GetResponBatalPlp_onDemandsResult);
                print_r(json_encode($xml));
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
            echo "ref_num ?";
        } 
        
    }

    public function laporan_yor()
    {
        $data = $this->m_yor
                    ->with_plp_detail()
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

    private function __loopGateIn()
    {
        $clauseWhere = [
            'flag_transfer' => 1,
            'no_bc11 !=' => '',
        ];
        $data = $this->m_gate_in->where($clauseWhere)->limit(mt_rand(1, 50))->get_all();
        // print_r($data); die;
        
        if (!$data)
        {
            echo "data kosong";
            exit();
        }

        $respon = $this->tps->CoarriCodeco_Kemasan($data);
        $respon = $respon->CoarriCodeco_KemasanResult;
        print_r($respon);
        if (strpos($respon, 'Berhasil') > 0)
        {
            $arr = explode('; ',$respon);
            $arr = array_filter($arr,'strlen');
            foreach ($data as $i => $v) 
            {
                if (strpos($arr[$i], 'Gagal Insert') === false)
                {
                    // $refNum = str_replace('Proses Berhasil REF ','',$arr[$i]);
                    // $refNum = substr($refNum,0,16);
                    $getRefNumb = explode(" ", trim($arr[$i]));
                    $refNum = $getRefNumb[3];
                    $xxx = ['flag_transfer' => 2, 'respon' => trim($arr[$i]), 'ref_num' => $refNum];
                    $this->m_gate_in->where('id_kms', $v['id_kms'])->update($xxx);
                }
            }
        }
    }

    public function impor_gate_in()
    {
        for ($i=0; $i < 10; $i++) { 
            $this->__loopGateIn();
            sleep(6);
        }
    }

    public function impor_gate_out()
    {
        for ($i=0; $i < 10; $i++) { 
            $this->__loopGateOut();
            sleep(6);
        }
    }

    private function __loopGateOut()
    {
        $clauseWhere = [
            'flag_transfer' => 1,
            'no_bc11 !=' => '',
        ];
        // $data = $this->m_gate_out->where('flag_transfer', 1)->limit(rand(10, 20))->get_all();
        $data = $this->m_gate_out->where($clauseWhere)->limit(mt_rand(1, 50))->get_all();
        if (!$data)
        {
            echo "data kosong";
            exit();
        }
        $respon = $this->tps->CoarriCodeco_Kemasan($data);
        $respon = $respon->CoarriCodeco_KemasanResult;
        print_r($respon);
        echo '<br>';
        if (strpos($respon, 'Berhasil') > 0)
        {
            $arr = explode('; ',$respon);
            $arr = array_filter($arr,'strlen');
            foreach ($data as $i => $v) 
            {
                if (strpos($arr[$i], 'Gagal Insert') === false)
                {
                    // $refNum = str_replace('Proses Berhasil REF ','',$arr[$i]);
                    // $refNum = substr($refNum,0,16);
                    $getRefNumb = explode(" ", trim($arr[$i]));
                    $refNum = $getRefNumb[3];
                    $xxx = ['flag_transfer' => 2, 'respon' => trim($arr[$i]), 'ref_num' => $refNum];
                    $this->m_gate_out->where('id_kms', $v['id_kms'])->update($xxx);
                }
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