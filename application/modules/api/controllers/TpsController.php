<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class TpsController extends MX_Controller
{
    public $wsdl = 'https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL';
    public $setting;
	private $client;
	public $username = "";
	public $password = "";
    public function __construct()
    {
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
		
        
	}
	public function mohon_plp(array $data = [])
	{
		if(empty($data))
		{
			show_error('xml kosong coba lagi',404,'Permohonan PLP');
			exit();
		}
		$xml = $this->xml_tps->xml_plp_kemasan($data); // data yg di parsing jadi xml 
		$param = array("Username"=>$this->username,"Password"=>$this->password,"fStream" =>$xml);
		try{
			$response = $this->client
							 ->__soapCall("UploadMohonPLP",array("UploadMohonPLP" => $param));
				return $response;
		}catch(SoapFault $exception){
				return show_error($exception->faultstring,404,'Soap Error');
		}

	}
	public function UploadBatalPLP(array $data = [])
	{
		if(empty($data))
		{
			show_error('xml kosong coba lagi',404,'Batal  PLP');
			exit();
		}
		$xml = $this->xml_tps->xml_batal_plp($data); // data yg di parsing jadi xml 
		$param = array("Username"=>$this->username,"Password"=>$this->password,"fStream" =>$xml);
		try{
			$response = $this->client
							 ->__soapCall("UploadBatalPLP",array("UploadBatalPLP" => $param));
				return $response;
		}catch(SoapFault $exception){
				return show_error($exception->faultstring,404,'Soap Error');
		}

	}
	public function GetResponPLP_Tujuan(string $kd_asp)
	{
		$param = array("UserName"=>$this->username,"Password"=>$this->password,
						"Kd_asp"=>$kd_asp);
		try{
			$response = $this->client
							 ->__soapCall("GetResponPLPTujuan",array("GetResponPLPTujuan" => $param));
				return $response;
		}catch(SoapFault $exception){
			return show_error($exception->faultstring,404,'Soap Error');
		}
	}
	public function GetResponPLP(string $kd_asp)
	{
		$param = array("UserName"=>$this->username,"Password"=>$this->password,
						"Kd_asp"=>$kd_asp);
		try{
			$response = $this->client
							 ->__soapCall("GetResponPLP",array("GetResponPLP" => $param));
				return $response;
		}catch(SoapFault $exception){
			return show_error($exception->faultstring,404,'Soap Error');
		}
	}
	public function GetResponBatalPLP(string $kd_asp)
	{
		$param = array("Username"=>$this->username,"Password"=>$this->password,
		"Kd_asp"=>$kd_asp);
		try{
		$response = $this->client
					->__soapCall("GetResponBatalPLP",array("GetResponBatalPLP" => $param));
		return $response;
		}catch(SoapFault $exception){
		return show_error($exception->faultstring,404,'Soap Error');
		}
	}
	public function GetResponBatalPLP_Tujuan(string $kd_asp)
	{
		$param = array("Username"=>$this->username,"Password"=>$this->password,
		"Kd_asp"=>$kd_asp);
		try{
		$response = $this->client
					->__soapCall("GetResponBatalPLPTujuan",array("GetResponBatalPLPTujuan" => $param));
		return $response;
		}catch(SoapFault $exception){
		return show_error($exception->faultstring,404,'Soap Error');
		}	
	}
	public function GetResponBatalPLP_onDemand ($ref_num)
	{
		if(empty($ref_num))
		{
			show_error('xml kosong coba lagi',404,'GetResponBatalPLP_onDemand');
			exit();
		}
		$param = array("UserName"=>$this->username,"Password"=>$this->password,
				"RefNumber"=>$ref_num);
		try{
			$response = $this->client
							 ->__soapCall("GetResponBatalPlp_onDemands",array("GetResponBatalPlp_onDemands" => $param));
				return $response;
		}catch(SoapFault $exception){
			return show_error($exception->faultstring,404,'Soap Error');
		}
	}
	public function GetResponPLP_onDemand (array $data = [])
	{
		if(empty($data))
		{
			show_error('xml kosong coba lagi',404,'GetResponPLP_onDemand');
			exit();
		}
		$param = array("UserName"=>$this->username,"Password"=>$this->password,
						"No_plp"=>isset($data['no_Plp'])?$data['no_Plp']:null,
						"Tgl_plp"=>isset($data['Tgl_Plp'])?$data['Tgl_Plp']:null,
						"KdGudang"=>isset($data['KdGudang'])?$data['KdGudang']:null,
						"RefNumber"=>isset($data['RefNumber'])?$data['RefNumber']:null
					  );
		try{
			$response = $this->client
							 ->__soapCall("GetResponPlp_onDemands",array("GetResponPlp_onDemands" => $param));
				return $response;
		}catch(SoapFault $exception){
			return show_error($exception->faultstring,404,'Soap Error');
		}
	}
	public function TotalRealiasiBongkarMuat(array $data = [])
	{
		if(empty($data))
		{
			show_error('xml kosong coba lagi',404,'TotalRealiasiBongkarMuat');
			exit();
		}
		$xml = $this->xml_tps->xml_total_bongkar_muat($data);
		$param = array("Username"=>$this->username,"Password"=>$this->password,"fStream" =>$xml);
		try{
			$response = $this->client
							 ->__soapCall("TotalRealiasiBongkarMuat",
								 	array("TotalRealiasiBongkarMuat" => $param)
								);
				return $response;
		}catch(SoapFault $exception){
			return show_error($exception->faultstring,404,'Soap Error');
		}

	}
	public function kirimLaporanYor(array $data = [])
	{
		if(empty($data))
		{
			show_error('xml kosong coba lagi',404,'kirimLaporanYor');
			exit();
		}
		$xml = $this->xml_tps->xml_laporan_yor($data);
		$param = array("Username"=>$this->username,"Password"=>$this->password,"fStream" =>$xml);
		try{
			$response = $this->client
							 ->__soapCall("KirimLaporanYor",
								 	array("KirimLaporanYor" => $param)
								);
				return $response;
		}catch(SoapFault $exception){
			return show_error($exception->faultstring,404,'Soap Error');
		}

	}
	public function GetInfoNomorBC11(array $data = [])
	{
		if(empty($data))
		{
			show_error('xml kosong coba lagi',404,'Get info nomor bc');
			exit();
		}
		$param = array("Username"=>$this->username,
						"Password"=>$this->password,
						"TglTibaAwal" =>$data['tgl_tiba'],
						"TglTibaAkhir" =>$data['tgl_akhir']);
		try{
			$response = $this->client
								->__soapCall("GetInfoNomorBC11",array("GetInfoNomorBC11" => $param));
				return $response;
		}catch(SoapFault $exception){
			return show_error($exception->faultstring,404,'Soap Error');
		}
	}
	public function CoarriCodeco_Kemasan(array $data = [])
	{
		
		if(empty($data))
		{
			show_error('xml kosong coba lagi',404,'CoarriCodeco_Kemasan');
			exit();
		}
		$xml = $this->xml_tps->xml_timbun($data);
		
		$param = array("Username"=>$this->username,"Password"=>$this->password,"fStream" =>$xml);
		//print_r($param);
		$this->client = new SoapClient($this->wsdl, $this->setting);
		try{
			$response = $this->client
							 ->__soapCall("CoarriCodeco_Kemasan",
								 	array("CoarriCodeco_Kemasan" => $param)
								);
				//print_r($response);
				return $response;
		}catch(SoapFault $exception){
			return show_error($exception->faultstring,404,'Soap Error');
		}
	}
	public function GetRejectData()
	{
		$param = array("Username"=>$this->username,"Password"=>$this->password,"Kd_Tps" =>'BGD');
		try{
			$response = $this->client
							 ->__soapCall("GetRejectData",
								 	array("GetRejectData" => $param)
								);
				return $response;
		}catch(SoapFault $exception){
			return show_error($exception->faultstring,404,'Soap Error');
		}
	}
}