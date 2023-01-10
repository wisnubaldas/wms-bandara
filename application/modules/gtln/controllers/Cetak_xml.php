<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Cetak_xml extends MX_Controller
{
    public $wsdl = 'https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL';
    public $setting;
    private $client;
    public $username = "BPKU";
    public $password = "TPSBPKU456";//"tpsbpku456";
    public function __construct()
    {
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
		$this->xml_tps = Modules::load('api/xmlController');
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

    public function impor_gate_in(){
        $data = $this->m_gate_in
                        ->where('id_kms','842052')
                        ->where('kode_kantor','050100')
                        ->limit(200)->get_all();
        //dd($data);

        if(!$data)
        {
            echo "data kosong";
            exit();
        }
        function stripper($element)
        {
            return trim($element); // this will remove the whitespace
        }
        $respon = $this->CoarriCodeco_Kemasan($data);
       dd($respon);      
    }
    
	public function CoarriCodeco_Kemasan(array $data = [])
	{
		if(empty($data))
		{
			show_error('xml kosong coba lagi',404,'CoarriCodeco_Kemasan');
			exit();
		}
		$xml = $this->xml_tps->xml_timbun($data);
		
		return $xml;
	}
	
	 public function impor_gate_in2()
    {
        $data = $this->m_gate_in
                        ->where('flag_transfer',0)
                        ->where('kode_kantor','050100')
                        ->limit(1)->get_all();
        //dd($data);

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
	
}

