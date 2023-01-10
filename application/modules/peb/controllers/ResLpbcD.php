<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class ResLpbcD extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	ResKd	ResTg	ResWk	NoLpse	SeriBrg	UrBrg	HsR	JmSatuanR	JnSatuanR	Merk	Type
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_reslpbcd')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_reslpbcd')->result();
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
					'NoLpse'		=> $this->put('NoLpse'),
					'SeriBrg'		=> $this->put('SeriBrg'),
					'UrBrg'			=> $this->put('UrBrg'),
					'HsR'			=> $this->put('HsR'),
					'JmSatuanR'		=> $this->put('JmSatuanR'),
					'JnSatuanR'		=> $this->put('JnSatuanR'),
					'Merk'			=> $this->put('Merk'),
					'Type'			=> $this->put('Type')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_reslpbcd', $data);
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
					'NoLpse'		=> $this->post('NoLpse'),
					'SeriBrg'		=> $this->post('SeriBrg'),
					'UrBrg'			=> $this->post('UrBrg'),
					'HsR'			=> $this->post('HsR'),
					'JmSatuanR'		=> $this->post('JmSatuanR'),
					'JnSatuanR'		=> $this->post('JnSatuanR'),
					'Merk'			=> $this->post('Merk'),
					'Type'			=> $this->post('Type')
					);
					
		 $insert = $this->db->insert('temp_reslpbcd', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}