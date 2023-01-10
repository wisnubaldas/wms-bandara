<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fhl_3_housewaybillsummarydetails extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $MessageKey = $this->get('MessageKey');
        if ($MessageKey == '') {
			$data = $this->db2->get('sending_fhl_3_housewaybillsummarydetails')->result();            
        } else {
            $this->db2->where('MessageKey', $MessageKey);
            $data = $this->db2->get('sending_fhl_3_housewaybillsummarydetails')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$MessageKey = $this->put('MessageKey');
        $data = array(	
					'MessageKey'				=> $this->put('MessageKey'),
					'MessageLineNo'				=> $this->put('MessageLineNo'),
					'LineIdentifier'			=> $this->put('LineIdentifier'),
					'HWBSerialNumber'			=> $this->put('HWBSerialNumber'),
					'AirportCodeOfDeparture'	=> $this->put('AirportCodeOfDeparture'),
					'AirportCodeOfDestination'	=> $this->put('AirportCodeOfDestination'),
					'NumberOfPieces'			=> $this->put('NumberOfPieces'),
					'WeightCode'                => $this->put('WeightCode'),
					'Weight'                    => $this->put('Weight'),
					'SLAC'                      => $this->put('SLAC'),
					'ManifestDescriptionOfGoods'=> $this->put('ManifestDescriptionOfGoods'),
					'SpecialHandlingCode1'      => $this->put('SpecialHandlingCode1'),
					'SpecialHandlingCode2'      => $this->put('SpecialHandlingCode2')
					);
					
		$this->db2->where('MessageKey', $MessageKey);
        $update = $this->db2->update('sending_fhl_3_housewaybillsummarydetails', $data);
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
					'HWBSerialNumber'			=> $this->post('HWBSerialNumber'),
					'AirportCodeOfDeparture'	=> $this->post('AirportCodeOfDeparture'),
					'AirportCodeOfDestination'	=> $this->post('AirportCodeOfDestination'),
					'NumberOfPieces'			=> $this->post('NumberOfPieces'),
					'WeightCode'                => $this->post('WeightCode'),
					'Weight'                    => $this->post('Weight'),
					'SLAC'                      => $this->post('SLAC'),
					'ManifestDescriptionOfGoods'=> $this->post('ManifestDescriptionOfGoods'),
					'SpecialHandlingCode1'      => $this->post('SpecialHandlingCode1'),
					'SpecialHandlingCode2'      => $this->post('SpecialHandlingCode2')
					);
					
		 $insert = $this->db2->insert('sending_fhl_3_housewaybillsummarydetails', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}