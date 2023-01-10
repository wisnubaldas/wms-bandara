<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fwb_k_senderreference extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fwb_k_senderreference')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fwb_k_senderreference')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'				=> $this->put('MessageLineNo'),
					'LineIdentifier'			=> $this->put('LineIdentifier'),
					'AirportCodeSender'			=> $this->put('AirportCodeSender'),
					'OfficeFunctionDesignator'	=> $this->put('OfficeFunctionDesignator'),
					'CompanyDesignator'			=> $this->put('CompanyDesignator'),
					'FileReference'				=> $this->put('FileReference'),
					'ParticipantIdentifier'		=> $this->put('ParticipantIdentifier'),
					'ParticipantCode'			=> $this->put('ParticipantCode'),
					'AirportCode'				=> $this->put('AirportCode'),
					'MessageKey'				=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fwb_k_senderreference', $data);
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
					'AirportCodeSender'			=> $this->post('AirportCodeSender'),
					'OfficeFunctionDesignator'	=> $this->post('OfficeFunctionDesignator'),
					'CompanyDesignator'			=> $this->post('CompanyDesignator'),
					'FileReference'				=> $this->post('FileReference'),
					'ParticipantIdentifier'		=> $this->post('ParticipantIdentifier'),
					'ParticipantCode'			=> $this->post('ParticipantCode'),
					'AirportCode'				=> $this->post('AirportCode')
					);
					
		 $insert = $this->db2->insert('sending_fwb_k_senderreference', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}