<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fwb_d_othercharges extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fwb_d_othercharges')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fwb_d_othercharges')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'		=> $this->put('MessageLineNo'),
					'LineIdentifier'	=> $this->put('LineIdentifier'),
					'OtherCharges'		=> $this->put('OtherCharges'),
					'OtherChargeCode'	=> $this->put('OtherChargeCode'),
					'EntitlementCode'	=> $this->put('EntitlementCode'),
					'ChargeAmount'		=> $this->put('ChargeAmount'),
					'MessageKey'		=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fwb_d_othercharges', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'		=> $this->post('MessageKey'),
					'MessageLineNo'		=> $this->post('MessageLineNo'),
					'LineIdentifier'	=> $this->post('LineIdentifier'),
					'OtherCharges'		=> $this->post('OtherCharges'),
					'OtherChargeCode'	=> $this->post('OtherChargeCode'),
					'EntitlementCode'	=> $this->post('EntitlementCode'),
					'ChargeAmount'		=> $this->post('ChargeAmount')
					);
					
		 $insert = $this->db2->insert('sending_fwb_d_othercharges', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}