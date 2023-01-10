<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResPebKms extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	ResKd	ResTg	ResWk	JnKemas	JmKemas	NoSegel
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_respebkms')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_respebkms')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'ResKd'			=> $this->put('ResKd'),
					'ResTg'			=> $this->put('ResTg'),
					'ResWk'			=> $this->put('ResWk'),
					'JnKemas'		=> $this->put('JnKemas'),
					'JmKemas'		=> $this->put('JmKemas'),
					'NoSegel'		=> $this->put('NoSegel')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_respebkms', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'ResKd'			=> $this->post('ResKd'),
					'ResTg'			=> $this->post('ResTg'),
					'ResWk'			=> $this->post('ResWk'),
					'JnKemas'		=> $this->post('JnKemas'),
					'JmKemas'		=> $this->post('JmKemas'),
					'NoSegel'		=> $this->post('NoSegel')
					);
					
		 $insert = $this->db->insert('temp_respebkms', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}