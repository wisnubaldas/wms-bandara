<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Print_xml extends MX_Controller
{
    public $wsdl = 'https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL';
    public $setting;
    private $client;
    public $username = "BPKU";
    public $password = "tpsbpku456";
    public function __construct()
    {
        $this->tps = Modules::load('api/tpsController');
        $this->tps->wsdl = "https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL";
        $this->tps->username = "BPKU";
        $this->tps->password = "tpsbpku456";
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
                            ->where('id_mohon =','1639')
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

        
        
    }

    
    
    
    
}

/* End of file filename.php */
