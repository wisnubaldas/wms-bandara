<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbhistory extends REST_Controller {
	
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
			$data = $this->db6->get('dbhistory')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbhistory')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'EmployeeCode'	=> $this->put('EmployeeCode'),
					'Description'	=> $this->put('Description'),
					'FormOfName'	=> $this->put('FormOfName'),
					'DateOfHistory'	=> $this->put('DateOfHistory'),
					'CodeOfJob'		=> $this->put('CodeOfJob'),
					'TimeOfHistory'	=> $this->put('TimeOfHistory'),
					'_updated_by'	=> $this->put('_updated_by'),	
					'_id'			=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbhistory', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'EmployeeCode'	=> $this->post('EmployeeCode'),
					'Description'	=> $this->post('Description'),
					'FormOfName'	=> $this->post('FormOfName'),
					'DateOfHistory'	=> $this->post('DateOfHistory'),
					'CodeOfJob'		=> $this->post('CodeOfJob'),
					'TimeOfHistory'	=> $this->post('TimeOfHistory'),
					'_created_by'	=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbhistory', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}