<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fwb_h_carrierexecution extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fwb_h_carrierexecution')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fwb_h_carrierexecution')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'		=> $this->put('MessageLineNo'),
					'LineIdentifier'	=> $this->put('LineIdentifier'),
					'DayIssue'			=> $this->put('DayIssue'),
					'MonthIssue'		=> $this->put('MonthIssue'),
					'YearIssue'			=> $this->put('YearIssue'),
					'PlaceIssue'		=> $this->put('PlaceIssue'),
					'AirportCode'		=> $this->put('AirportCode'),
					'Signature'			=> $this->put('Signature'),
					'MessageKey'		=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fwb_h_carrierexecution', $data);
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
					'DayIssue'			=> $this->post('DayIssue'),
					'MonthIssue'		=> $this->post('MonthIssue'),
					'YearIssue'			=> $this->post('YearIssue'),
					'PlaceIssue'		=> $this->post('PlaceIssue'),
					'AirportCode'		=> $this->post('AirportCode'),
					'Signature'			=> $this->post('Signature')
					);
					
		 $insert = $this->db2->insert('sending_fwb_h_carrierexecution', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}