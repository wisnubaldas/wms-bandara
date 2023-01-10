<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/*
class Plp extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('plpModel');
		$this->load->helper('xmloverbrengin');		
		// setting soap clieant
		$this->wsdl = 'https://tpsonline.beacukai.go.id/tps/service.asmx?WSDL';
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
	}
	
	public function mohonplp()
	{
		$data = $this->plpModel->getData('mohonplp');
		foreach ($data as $v) {
			$xml = xmlplpmohon($v);
			$movies = new SimpleXMLElement(str_replace('xmlns="loadmohonplp.xsd"', '', $xml));
			$hawb = [
						'no_bl_awb'=>$movies->LOADPLP->DETIL->KMS->NO_BL_AWB,
						'ref_num'=>$movies->LOADPLP->HEADER->REF_NUMBER
					];
			$this->send_plp_xml($xml,$hawb,'mohon_plp');
		}
	}
	
	public function batalplp()
	{
		$data = $this->plpModel->getData('batalplp');
		foreach ($data as $v) {
			$xml = xmlplpbatal($v);
			$movies = new SimpleXMLElement(str_replace('xmlns="loadbatalplp.xsd"', '', $xml));
			$hawb = [
						'no_bl_awb'=>$movies->BATALPLP->DETIL->KMS->NO_BL_AWB,
						'ref_num'=>$movies->BATALPLP->HEADER->REF_NUMBER
					];
			$this->send_plp_xml($xml,$hawb,'batal_plp');
		}
	}
	
	public function totalbongkarmuat()
	{
		$data = $this->plpModel->getData('bongkarmuat');
		foreach ($data as $v) {
			$xml = xmlbongkarmuat($v);
			$movies = new SimpleXMLElement(str_replace('xmlns="bongkarmuat.xsd"', '', $xml));
			$hawb="";
			$this->send_plp_xml($xml,$hawb,'bongkarmuat');
		}	
	}
	
	public function serviceYOR()
	{
		$data = $this->plpModel->getData('serviceYOR');
		foreach ($data as $v) {
			$xml = xmlserviceYOR($v);
			$movies = new SimpleXMLElement(str_replace('xmlns="serviceYOR.xsd"', '', $xml));
			$hawb="";
			$this->send_plp_xml($xml,$hawb,'serviceYOR');
		}	
	}
	
	private function send_plp_xml($xml,$hawb,$table)
	{
		try{
			 $param = array("Username"=>"BGD1",
                    "Password"=>"BGD12345",
					"fStream" =>$xml);
			if $table == "mohon_plp" {
				$response = $this->client->__soapCall("uploadMohonPLP", array("uploadMohonPLP" => $param));
				print_r($response);
				if($response)
				{
				$this->plpModel->updateData($hawb,$table);
				log_message('error', $response->uploadMohonPLPResult);
				}
			}
			elseif $table == "batal_plp"{
				$response = $this->client->__soapCall("uploadBatalPLP", array("uploadBatalPLP" => $param));
				print_r($response);
				if($response)
				{
				$this->plpModel->updateData($hawb,$table);
				log_message('error', $response->uploadBatalPLPResult);
				}
			}
			elseif $table == "bongkarmuat"{
				 $param = array("fStream" =>$xml,
								"Username"=>"BGD1",
								"Password"=>"BGD12345");
				$response = $this->client->__soapCall("TotalRealiasiBongkarMuat", array("TotalRealiasiBongkarMuat" => $param));
				print_r($response);
				if($response)
				{
				$this->plpModel->updateData($hawb,$table);
				log_message('error', $response->TotalRealiasiBongkarMuatResult);
				}
			}
			elseif $table == "serviceYOR"{
				$response = $this->client->__soapCall("kirimLaporanYor", array("kirimLaporanYor" => $param));
				print_r($response);
				if($response)
				{
				$this->plpModel->updateData($hawb,$table);
				log_message('error', $response->serviceYORResult);
				}
			}
		}
			catch (SoapFault $exception) {
				log_message('error', $exception);    
			}
	}

}

/* End of file BcTps.php */
/* Location: ./application/controllers/BcTps.php */