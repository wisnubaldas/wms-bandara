<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class DmlMasterController extends REST_Controller {
	
	private $db2;
	function __construct($config = 'rest')
    {
        // Construct the parent class
		//
        parent::__construct($config);
		$this->db2 = $this->load->database('sys_cms_master', TRUE);
		
    }
	
	// insert new data to mahasiswa
    function index_post() {
        $data = array(
                    'airlinescode'    => $this->post('airlinescode'),
                    'airlinesname'    => $this->post('airlinesname'),                    
					'countryID'       => $this->post('countryID'));
        $insert = $this->db2->insert('m_airlines', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
	
	function index_put() {  
		$airlinescode=$this->put('airlinescode');
        $data = array(					
                    'airlinesname' => $this->post('airlinesname'),
                    'countryID'    => $this->post('countryID'));
					
        $this->db2->where('airlinescode', $airlinescode);
        $update = $this->db2->update('m_airlines', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
	
	function index_delete() {
        $airlinescode = $this->delete('airlinescode');
        $this->db2->where('airlinescode', $airlinescode);
        $delete = $this->db2->delete('m_airlines');
        if ($delete) {
            $this->response(array('status' => 'success'), 201);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
    }
	
	
	
	
}