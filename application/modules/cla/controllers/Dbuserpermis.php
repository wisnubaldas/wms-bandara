<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbuserpermis extends REST_Controller {
	
	private $db6;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db6 = $this->load->database('dbmscargo', TRUE);
	}
	
	function index_get() {
        $_id = $this->get('_id');
        if ($_id == '') {
			$data = $this->db6->get('dbuserpermis')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbuserpermis')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(						
					'EmployeeCode'		=> $this->put('EmployeeCode'),
					'FlightOfType'		=> $this->put('FlightOfType'),
					'CodeForm'			=> $this->put('CodeForm'),
					'isSelect'			=> $this->put('isSelect'),
					'isInsert'			=> $this->put('isInsert'),
					'isUpdate'			=> $this->put('isUpdate'),
					'isVoid'			=> $this->put('isVoid'),
					'isPrint'			=> $this->put('isPrint'),
					'DateFrom'			=> $this->put('DateFrom'),
					'DateUntil'			=> $this->put('DateUntil'),
					'_updated_by'		=> $this->put('_updated_by'),	
					'_id'				=> $this->put('_id')		
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbuserpermis', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'EmployeeCode'		=> $this->post('EmployeeCode'),
					'FlightOfType'		=> $this->post('FlightOfType'),
					'CodeForm'			=> $this->post('CodeForm'),
					'isSelect'			=> $this->post('isSelect'),
					'isInsert'			=> $this->post('isInsert'),
					'isUpdate'			=> $this->post('isUpdate'),
					'isVoid'			=> $this->post('isVoid'),
					'isPrint'			=> $this->post('isPrint'),
					'DateFrom'			=> $this->post('DateFrom'),
					'DateUntil'			=> $this->post('DateUntil'),
					'_created_by'		=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbuserpermis', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}