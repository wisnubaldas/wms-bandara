<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResPebDtl extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	ResKd	ResTg	ResWk	IdEks	NpwpEks	NamaEks	AlmtEks	NipPtg	NmPtg	NmKomp
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_respebdtl')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_respebdtl')->result();
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
					'IdEks'			=> $this->put('IdEks'),
					'NpwpEks'		=> $this->put('NpwpEks'),
					'NamaEks'		=> $this->put('NamaEks'),
					'AlmtEks'		=> $this->put('AlmtEks'),
					'NipPtg'		=> $this->put('NipPtg'),
					'NmPtg'			=> $this->put('NmPtg'),
					'NmKomp'		=> $this->put('NmKomp')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_respebdtl', $data);
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
					'IdEks'			=> $this->post('IdEks'),
					'NpwpEks'		=> $this->post('NpwpEks'),
					'NamaEks'		=> $this->post('NamaEks'),
					'AlmtEks'		=> $this->post('AlmtEks'),
					'NipPtg'		=> $this->post('NipPtg'),
					'NmPtg'			=> $this->post('NmPtg'),
					'NmKomp'		=> $this->post('NmKomp')
					);
					
		 $insert = $this->db->insert('temp_respebdtl', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}