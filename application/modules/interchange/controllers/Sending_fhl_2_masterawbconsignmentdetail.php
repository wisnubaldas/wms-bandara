<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fhl_2_masterawbconsignmentdetail extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $Noid = $this->get('Noid');
        if ($Noid == '') {
			$data = $this->db2->get('sending_fhl_2_masterawbconsignmentdetail')->result();            
        } else {
            $this->db2->where('Noid', $Noid);
            $data = $this->db2->get('sending_fhl_2_masterawbconsignmentdetail')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$MessageKey = $this->put('MessageKey');
        $data = array(	
					'MessageKey'				=> $this->put('MessageKey'),
					'MessageLineNo'				=> $this->put('MessageLineNo'),
					'LineIdentifier'			=> $this->put('LineIdentifier'),
					'AirlinePrefix'				=> $this->put('AirlinePrefix'),
					'AWBNumber'					=> $this->put('AWBNumber'),
					'OriginCode'				=> $this->put('OriginCode'),
					'DestinationCode'			=> $this->put('DestinationCode'),
					'ShipmentDescriptionCode'	=> $this->put('ShipmentDescriptionCode'),
					'NumberOfPieces'			=> $this->put('NumberOfPieces'),
					'WeightCode'				=> $this->put('WeightCode'),
					'Weight'					=> $this->put('Weight')
					
					);
					
		$this->db2->where('MessageKey', $MessageKey);
        $update = $this->db2->update('sending_fhl_2_masterawbconsignmentdetail', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'				=> $this->post('MessageKey'),
					'MessageLineNo'				=> $this->post('MessageLineNo'),
					'LineIdentifier'			=> $this->post('LineIdentifier'),
					'AirlinePrefix'				=> $this->post('AirlinePrefix'),
					'AWBNumber'					=> $this->post('AWBNumber'),
					'OriginCode'				=> $this->post('OriginCode'),
					'DestinationCode'			=> $this->post('DestinationCode'),
					'ShipmentDescriptionCode'	=> $this->post('ShipmentDescriptionCode'),
					'NumberOfPieces'			=> $this->post('NumberOfPieces'),
					'WeightCode'				=> $this->post('WeightCode'),
					'Weight'					=> $this->post('Weight')
					);
					
		 $insert = $this->db2->insert('sending_fhl_2_masterawbconsignmentdetail', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}