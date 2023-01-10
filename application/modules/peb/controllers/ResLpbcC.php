<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResLpbcC extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	ResKd	ResTg	resWk	NoLpse	Seri	NoCont	Size	Type	NoSegel
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_reslpbcc')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_reslpbcc')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'ResKd'			=> $this->put('ResKd'),
					'ResTg'			=> $this->put('ResTg'),
					'resWk'			=> $this->put('resWk'),
					'NoLpse'		=> $this->put('NoLpse'),
					'Seri'			=> $this->put('Seri'),
					'NoCont'		=> $this->put('NoCont'),
					'Size'			=> $this->put('Size'),
					'Type'			=> $this->put('Type'),
					'NoSegel'		=> $this->put('NoSegel')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_reslpbcc', $data);
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
					'resWk'			=> $this->post('resWk'),
					'NoLpse'		=> $this->post('NoLpse'),
					'Seri'			=> $this->post('Seri'),
					'NoCont'		=> $this->post('NoCont'),
					'Size'			=> $this->post('Size'),
					'Type'			=> $this->post('Type'),
					'NoSegel'		=> $this->post('NoSegel')
					);
					
		 $insert = $this->db->insert('temp_reslpbcc', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}