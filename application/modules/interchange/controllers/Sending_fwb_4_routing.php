<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fwb_4_routing extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fwb_4_routing')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fwb_4_routing')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(						
					'MessageLineNo'						=> $this->put('MessageLineNo'),
					'LineIdentifier'					=> $this->put('LineIdentifier'),
					'AirportCodeDestination'			=> $this->put('AirportCodeDestination'),
					'CarrierCodeDestination'			=> $this->put('CarrierCodeDestination'),
					'AirportCodeOnwardDestination'		=> $this->put('AirportCodeOnwardDestination'),
					'CarrierCodeOnwardDestination'		=> $this->put('CarrierCodeOnwardDestination'),
					'AirportCodeDestination2'			=> $this->put('AirportCodeDestination2'),
					'CarrierCodeDestination2'			=> $this->put('CarrierCodeDestination2'),
					'AirportCodeOnwardDestination2'		=> $this->put('AirportCodeOnwardDestination2'),
					'CarrierCodeOnwardDestination2'		=> $this->put('CarrierCodeOnwardDestination2'),
					'AirportCodeDestination3'			=> $this->put('AirportCodeDestination3'),
					'CarrierCodeDestination3'			=> $this->put('CarrierCodeDestination3'),
					'AirportCodeOnwardDestination3'		=> $this->put('AirportCodeOnwardDestination3'),
					'CarrierCodeOnwardDestination3'		=> $this->put('CarrierCodeOnwardDestination3'),
					'MessageKey'						=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fwb_4_routing', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'						=> $this->post('MessageKey'),
					'MessageLineNo'						=> $this->post('MessageLineNo'),
					'LineIdentifier'					=> $this->post('LineIdentifier'),
					'AirportCodeDestination'			=> $this->post('AirportCodeDestination'),
					'CarrierCodeDestination'			=> $this->post('CarrierCodeDestination'),
					'AirportCodeOnwardDestination'		=> $this->post('AirportCodeOnwardDestination'),
					'CarrierCodeOnwardDestination'		=> $this->post('CarrierCodeOnwardDestination'),
					'AirportCodeDestination2'			=> $this->post('AirportCodeDestination2'),
					'CarrierCodeDestination2'			=> $this->post('CarrierCodeDestination2'),
					'AirportCodeOnwardDestination2'		=> $this->post('AirportCodeOnwardDestination2'),
					'CarrierCodeOnwardDestination2'		=> $this->post('CarrierCodeOnwardDestination2'),
					'AirportCodeDestination3'			=> $this->post('AirportCodeDestination3'),
					'CarrierCodeDestination3'			=> $this->post('CarrierCodeDestination3'),
					'AirportCodeOnwardDestination3'		=> $this->post('AirportCodeOnwardDestination3'),
					'CarrierCodeOnwardDestination3'		=> $this->post('CarrierCodeOnwardDestination3')
					);
					
		 $insert = $this->db2->insert('sending_fwb_4_routing', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}