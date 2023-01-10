<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebQq extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	IdQq	NpwpQq	NiperQq
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('PebQq')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('PebQq')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'IdQq'			=> $this->put('IdQq'),
					'NpwpQq'		=> $this->put('NpwpQq'),
					'NiperQq'		=> $this->put('NiperQq')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('PebQq', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'IdQq'			=> $this->post('IdQq'),
					'NpwpQq'		=> $this->post('NpwpQq'),
					'NiperQq'		=> $this->post('NiperQq')
					);
					
		 $insert = $this->db->insert('PebQq', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}