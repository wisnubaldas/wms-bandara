<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebDok extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	id	CAR	KdDok	NoDok	TgDok	KdKtrDok
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_PebDok')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_PebDok')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'KdDok'			=> $this->put('KdDok'),
					'NoDok'			=> $this->put('NoDok'),
					'TgDok'			=> $this->put('TgDok'),
					'KdKtrDok'		=> $this->put('KdKtrDok')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_PebDok', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'KdDok'			=> $this->post('KdDok'),
					'NoDok'			=> $this->post('NoDok'),
					'TgDok'			=> $this->post('TgDok'),
					'KdKtrDok'		=> $this->post('KdKtrDok')
					);
					
		 $insert = $this->db->insert('temp_PebDok', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}