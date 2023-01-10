<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbuser extends REST_Controller {
	
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
			$data = $this->db6->get('dbuser')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbuser')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(						
					'EmployeeName'		=> $this->put('EmployeeName'),						
					'PlaceOfBirth'		=> $this->put('PlaceOfBirth'),						
					'DateOfBirth'		=> $this->put('DateOfBirth'),						
					'Gender'			=> $this->put('Gender'),						
					'Address1'			=> $this->put('Address1'),						
					'Address2'			=> $this->put('Address2'),						
					'ActiveDate'		=> $this->put('ActiveDate'),						
					'UserID'			=> $this->put('UserID'),						
					'Password'			=> $this->put('Password'),						
					'Level'				=> $this->put('Level'),
					'EmployeeCode'		=> $this->put('EmployeeCode'),
					'_updated_by'		=> $this->put('_updated_by'),	
					'_id'				=> $this->put('_id')	
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbuser', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'EmployeeCode'		=> $this->post('EmployeeCode'),
					'EmployeeName'		=> $this->post('EmployeeName'),						
					'PlaceOfBirth'		=> $this->post('PlaceOfBirth'),						
					'DateOfBirth'		=> $this->post('DateOfBirth'),						
					'Gender'			=> $this->post('Gender'),						
					'Address1'			=> $this->post('Address1'),						
					'Address2'			=> $this->post('Address2'),						
					'ActiveDate'		=> $this->post('ActiveDate'),						
					'UserID'			=> $this->post('UserID'),						
					'Password'			=> $this->post('Password'),						
					'Level'				=> $this->post('Level'),
					'_created_by'		=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbuser', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}