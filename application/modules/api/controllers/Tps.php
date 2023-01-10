<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tps extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('tpsModel');
		$this->load->helper('xmlparsing');
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
	
	public function gateIn()
	{
		$data = $this->tpsModel->getData('gateIn');
		foreach ($data as $v) {
			$xml = xmlTps($v);
			$movies = new SimpleXMLElement(str_replace('xmlns="cocokms.xsd"', '', $xml));
			$hawb = [
						'no_bl_awb'=>$movies->COCOKMS->DETIL->KMS->NO_BL_AWB,
						'ref_num'=>$movies->COCOKMS->HEADER->REF_NUMBER
					];
			$this->send_xml($xml,$hawb,'get_imp_in');
		}
	}
	public function gateOut()
	{
		$data = $this->tpsModel->getData('gateOut');
		foreach ($data as $v) {
			$xml = xmlTps($v);
			$movies = new SimpleXMLElement(str_replace('xmlns="cocokms.xsd"', '', $xml));
			$hawb = [
						'no_bl_awb'=>$movies->COCOKMS->DETIL->KMS->NO_BL_AWB,
						'ref_num'=>$movies->COCOKMS->HEADER->REF_NUMBER
					];
			$this->send_xml($xml,$hawb,'get_imp_out');
		}
	}
	private function send_xml($xml,$hawb,$table)
	{
		try{
			 $param = array("fStream" =>$xml,
                    "Username"=>"BGD1",
                    "Password"=>"BGD12345");
			$response = $this->client->__soapCall("CoarriCodeco_Kemasan", array("CoarriCodeco_Kemasan" => $param));
			print_r($response);
			
			if($response)
			{
				$this->tpsModel->updateData($hawb,$table);
				log_message('error', $response->CoarriCodeco_KemasanResult);
			}
			
			}
			catch (SoapFault $exception) {
				log_message('error', $exception);    
			}
	}

}

/* End of file BcTps.php */
/* Location: ./application/controllers/BcTps.php */