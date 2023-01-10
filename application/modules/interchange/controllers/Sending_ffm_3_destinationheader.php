<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_ffm_3_destinationheader extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $Noid = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_ffm_3_destinationheader')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_ffm_3_destinationheader')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'				=> $this->put('MessageLineNo'),
					'AirportCodeOfUnloading'	=> $this->put('AirportCodeOfUnloading'),
					'NilCargoCode'				=> $this->put('NilCargoCode'),
					'MessageKey'				=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_ffm_3_destinationheader', $data);
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
					'AirportCodeOfUnloading'	=> $this->post('AirportCodeOfUnloading'),
					'NilCargoCode'				=> $this->post('NilCargoCode')
					);
					
		 $insert = $this->db2->insert('sending_ffm_3_destinationheader', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}