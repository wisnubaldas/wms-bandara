<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class PebGabDok extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	SeriEks	SeriBrgG	KtrSstbG	KdDokG	NoDokG	TgDokG
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_PebGabDok')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_PebGabDok')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'				=> $this->put('CAR'),
					'SeriEks'			=> $this->put('SeriEks'),
					'SeriBrgG'			=> $this->put('SeriBrgG'),
					'KtrSstbG'			=> $this->put('KtrSstbG'),
					'KdDokG'			=> $this->put('KdDokG'),
					'NoDokG'			=> $this->put('NoDokG'),
					'TgDokG'			=> $this->put('TgDokG')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_PebGabDok', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'				=> $this->post('CAR'),
					'SeriEks'			=> $this->post('SeriEks'),
					'SeriBrgG'			=> $this->post('SeriBrgG'),
					'KtrSstbG'			=> $this->post('KtrSstbG'),
					'KdDokG'			=> $this->post('KdDokG'),
					'NoDokG'			=> $this->post('NoDokG'),
					'TgDokG'			=> $this->post('TgDokG')
					);
					
		 $insert = $this->db->insert('temp_PebGabDok', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}