<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Reslpbck extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('dev_peb_pli', TRUE);
	}
	
	function index_get() {
		
        //id	CAR	RESTG	RESWK	NOLPSE	SERI	JNKEMASR	JMKEMASR
		$id = $this->get('id');
        if ($id == '') {
			$data = $this->db->get('temp_reslpbck')->result();            
        } else {
            $this->db->where('id', $id);
            $data = $this->db->get('temp_reslpbck')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(
					'CAR'			=> $this->put('CAR'),
					'RESTG'			=> $this->put('RESTG'),
					'RESWK'			=> $this->put('RESWK'),
					'NOLPSE'		=> $this->put('NOLPSE'),
					'SERI'			=> $this->put('SERI'),
					'JNKEMASR'		=> $this->put('JNKEMASR'),
					'JMKEMASR'		=> $this->put('JMKEMASR')
					);
					
		$this->db->where('id', $id);
        $update = $this->db->update('temp_reslpbck', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	function index_post() {		
        $data = array(		
					'CAR'			=> $this->post('CAR'),
					'RESTG'			=> $this->post('RESTG'),
					'RESWK'			=> $this->post('RESWK'),
					'NOLPSE'		=> $this->post('NOLPSE'),
					'SERI'			=> $this->post('SERI'),
					'JNKEMASR'		=> $this->post('JNKEMASR'),
					'JMKEMASR'		=> $this->post('JMKEMASR')
					);
					
		 $insert = $this->db->insert('temp_reslpbck', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}