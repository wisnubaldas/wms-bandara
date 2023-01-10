<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tps extends CI_Controller {

	
	public function __construct()
	{
		parent::__construct();
		$this->load->model('ResponModel');		
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
	
	public function get_info_bc11()
	{
		try{
			$param = array("Username"=>"BGD1",
						"Password"=>"BGD12345",
						"Tgl_awal"=>"20022018","Tgl_akhir"=>"20022018");
			$response = $this->client->__soapCall("GetInfoNomorBC11", array("GetInfoNomorBC11" => $requestData));
			$xmlRespon = new SimpleXMLElement($response->return);
			foreach ($xmlRespon as $v) {
				$return = $this->status_mdl->insert_InfoNomorBC11($v);
			}
		}
			catch (SoapFault $exception) {
					log_message('error', $exception.' --->get all responnya'); 
					return true;     
			} 
	}
	
	public function Responplp_onDemand($no_Plp,$Tgl_Plp,$RefNumber,$KdGudang)
	{
		try{$param = array("Username"=>"BGD1",
						"Password"=>"BGD12345",
						"no_Plp"=>".$no_Plp.",
						"Tgl_Plp"=>".$Tgl_Plp.",
						"RefNumber"=>".$RefNumber.",
						"KdGudang"=>".$KdGudang.");
		$response = $this->client->__soapCall("GetResponPLP_onDemand", array("GetResponPLP_onDemand" => $requestData));
		$xmlRespon = new SimpleXMLElement($response->return);
			foreach ($xmlRespon as $v) {
				$return = $this->status_mdl->insert_respon_setuju_tps_asal($v);
			}
		}
		catch (SoapFault $exception) {
					log_message('error', $exception.' --->get all responnya'); 
					return true;     
			} 
	}
	
	public function ResponBatalplp_onDemand($noBatalPlp,$TglBatalPlp,$RefNumber,$KdGudang)
	{
		try{$param = array("Username"=>"BGD1",
						"Password"=>"BGD12345",
						"noBatalPlp"=>".$noBatalPlp.",
						"TglBatalPlp"=>".$TglBatalPlp.",
						"RefNumber"=>".$RefNumber.",
						"KdGudang"=>".$KdGudang.");
		$response = $this->client->__soapCall("GetResponBatalPLP_onDemand", array("GetResponBatalPLP_onDemand" => $requestData));
		$xmlRespon = new SimpleXMLElement($response->return);
			foreach ($xmlRespon as $v) {
				$return = $this->status_mdl->insert_respon_batal_tps_asal($v);
			}
		}
		catch (SoapFault $exception) {
					log_message('error', $exception.' --->get all responnya'); 
					return true;     
			} 
	}
}

/* End of file BcTps.php */
/* Location: ./application/controllers/BcTps.php */