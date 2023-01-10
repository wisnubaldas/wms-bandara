<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbvoid extends REST_Controller {
	
	private $db6;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db6 = $this->load->database('dbmscargo', TRUE);
	}
	
	function index_post() {		
        $data = array(		
					'NomorVoid'			=> $this->post('NomorVoid'),
					'DateOfVoid'		=> $this->post('DateOfVoid'),
					'TimeOfVoid'		=> $this->post('TimeOfVoid'),
					'EmployeeCodeVoid'	=> $this->post('EmployeeCodeVoid'),
					'EmployeeCode'	    => $this->post('EmployeeCode'),
					'Remarks'			=> $this->post('Remarks'),
					'MasterAWB'			=> $this->post('MasterAWB'),
					'_created_by'		=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbvoid', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}