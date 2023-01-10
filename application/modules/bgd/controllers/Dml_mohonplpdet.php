<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dml_mohonplpdet extends REST_Controller {
	
	function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('mohon_plp_det')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('mohon_plp_det')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(			
					'id_mohon' 		=> $this->put('id_mohon'),
					'kd_kms' 		=> $this->put('kd_kms'),
					'jns_kms' 		=> $this->put('jns_kms'),
					'jml_kms' 		=> $this->put('jml_kms'),
					'no_bl_awb'		=> $this->put('no_bl_awb'),
					'tgl_bl_Awb' 	=> $this->put('tgl_bl_Awb'),
					'id'			=> $this->put('id')
					);
		$this->db->where('id', $id);
        $update = $this->db->update('mohon_plp_det', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {
		//$id = $this->put('id');
        $data = array(			
					'id_mohon' 		=> $this->post('id_mohon'),
					'kd_kms' 		=> $this->post('kd_kms'),
					'jns_kms' 		=> $this->post('jns_kms'),
					'jml_kms' 		=> $this->post('jml_kms'),
					'no_bl_awb'		=> $this->post('no_bl_awb'),
					'tgl_bl_Awb' 	=> $this->post('tgl_bl_Awb')
					);
		//$this->db->where('id', $id);
        $insert = $this->db->insert('mohon_plp_det', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	
		
	
}