<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class TrackController extends MX_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('tracking/import','imp');
		$this->load->model('tracking/export','exp');
		
	}
	public function import()
	{
		// table import breakdown,DO,POD,buildUp
		$postData = $this->input->post();
		if($postData['flight'] == "")
		{
			if($postData['mawb'] != '')
			{
				$custom = ['mawb'=>$postData['mawb']];
			}else{
			return $this->output
		            ->set_content_type('application/json')
		            ->set_status_header(500) 
		            ->set_output(json_encode(['message'=>'Minimal track Flight date must be set']));
			}
		}else{
				$flight = str_replace('/','-',$postData['flight']);
				//$flight = explode(' - ',$postData['flight']);
				$custom = 'dateflight BETWEEN "'.$flight.'" AND "'.$flight.'"';
				if($postData['mawb'] != '')
				{
					if(isset($postData['booking'])){
						$custom = ['mawb'=>$postData['mawb'],'STATUS'=>'"BREAKDOWN"'];
					}elseif(isset($postData['weighing'])){
						$custom = ['mawb'=>$postData['mawb'],'STATUS'=>'"DELIVERY"'];
					}else{
						$custom = ['mawb'=>$postData['mawb']];
					}
				}else{
                     if(isset($postData['booking']) || !isset($postData['booking']))
					{
						$custom = 'dateflight BETWEEN "'.$flight.'" AND "'.$flight.'"'.'AND STATUS = "BREAKDOWN"';
						//$custom = 'dateflight BETWEEN "'.$flight.'" AND "'.$flight.'"'.'AND STATUS = "BOOKING"';

					}elseif(isset($postData['weighing']) && !isset($postData['booking']))
					{
						$custom = 'dateflight BETWEEN "'.$flight.'" AND "'.$flight.'"'.'AND STATUS = "BREAKDOWN"';
						//$custom = 'dateflight BETWEEN "'.$flight.'" AND "'.$flight.'"'.'AND STATUS = "BOOKING"';
					}else{
						$custom = 'dateflight BETWEEN "'.$flight.'" AND "'.$flight.'"'.'AND STATUS = "BREAKDOWN"';
					}
				}
			}
		$data = $this->imp
					->fields('Noid,mawb,hawb,pieces,weight,dateflight,SHIPPER,CONSIGNEE,AGENT,STATUS')
					->where($custom,NULL,NULL,FALSE,FALSE,TRUE)
					->get_all();
		return $this->output
		            ->set_content_type('application/json')
		            ->set_status_header(200)
		            ->set_output(json_encode($data));

	}

	public function export()
	{
		// Build UP
		$postData = $this->input->post();
		if($postData['flight'] == "") 
		{
			if($postData['mawb'] != '')
			{
				$custom = ['mawb'=>$postData['mawb']];
			}else{
			return $this->output
		            ->set_content_type('application/json')
		            ->set_status_header(500) 
		            ->set_output(json_encode(['message'=>'Minimal track Flight date must be set']));
			}
		}else{
				
				$flight = str_replace('/','-',$postData['flight']);
				$custom = 'dateflight BETWEEN "'.$flight.'" AND "'.$flight.'"';
				if($postData['mawb'] != '')
				{	
					if(isset($postData['booking']) && !isset($postData['weighing']))
					{
						$custom = ['mawb'=>$postData['mawb'],'STATUS'=>'"BOOKING"'];
					}elseif(isset($postData['weighing']) && !isset($postData['booking']))
					{
						$custom = ['mawb'=>$postData['mawb'],'STATUS'=>'"WEIGHING"'];
					}else{
						$custom = ['mawb'=>$postData['mawb']];
					}
				}else{

					if(isset($postData['booking']) || !isset($postData['booking']))
					{
						$custom = 'dateflight BETWEEN "'.$flight.'" AND "'.$flight.'"'.'AND STATUS = "BOOKING"';
					}elseif(isset($postData['weighing']) && !isset($postData['booking']))
					{
						$custom = 'dateflight BETWEEN "'.$flight.'" AND "'.$flight.'"'.'AND STATUS = "BOOKING"';
					}
				}
		}
		$data = $this->exp
					->fields('Noid,mawb,hawb,pieces,weight,dateflight,entrytime,NatureGood,SHIPPER,STATUS')
					->where($custom,NULL,NULL,FALSE,FALSE,TRUE)
					->get_all();
		return $this->output
		            ->set_content_type('application/json')
		            ->set_status_header(200)
		            ->set_output(json_encode($data));
	}

}

/* End of file TrackController.php */
/* Location: ./application/modules/front/controllers/TrackController.php */