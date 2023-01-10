<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResBcf305 extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	ResKd	ResTg	ResWk	IdEks	NpwpEks	NamaEks	AlmtEks	NoBcf305	SeriBcf305	TgBcf305	NipPtg	NmPtg	NmKomp
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_resbcf305')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_resbcf305')->result();
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
					'NoBcf305'		=> $this->put('NoBcf305'),
					'SeriBcf305'	=> $this->put('SeriBcf305'),
					'TgBcf305'		=> $this->put('TgBcf305'),
					'NipPtg'		=> $this->put('NipPtg'),
					'NmPtg'			=> $this->put('NmPtg'),
					'NmKomp'		=> $this->put('NmKomp')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_resbcf305', $data);
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
					'NoBcf305'		=> $this->post('NoBcf305'),
					'SeriBcf305'	=> $this->post('SeriBcf305'),
					'TgBcf305'		=> $this->post('TgBcf305'),
					'NipPtg'		=> $this->post('NipPtg'),
					'NmPtg'			=> $this->post('NmPtg'),
					'NmKomp'		=> $this->post('NmKomp')
					);
					
		 $insert = $this->db->insert('temp_resbcf305', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}