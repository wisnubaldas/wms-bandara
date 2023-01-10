<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebKms extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	JnKemas	JmKemas	MERKKEMAS
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_PebKms')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_PebKms')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'JnKemas'		=> $this->put('JnKemas'),
					'JmKemas'		=> $this->put('JmKemas'),
					'MERKKEMAS'		=> $this->put('MERKKEMAS')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_PebKms', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'JnKemas'		=> $this->post('JnKemas'),
					'JmKemas'		=> $this->post('JmKemas'),
					'MERKKEMAS'		=> $this->post('MERKKEMAS')
					);
					
		 $insert = $this->db->insert('temp_PebKms', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}