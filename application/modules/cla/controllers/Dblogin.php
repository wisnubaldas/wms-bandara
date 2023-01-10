<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dblogin extends REST_Controller {
	
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
			$data = $this->db6->get('dblogin')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dblogin')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$EmployeeCode = $this->put('EmployeeCode');
        $data = array(	
					'NameOfForm'	=> $this->put('NameOfForm'),
					'FlagInsert'	=> $this->put('FlagInsert'),
					'FlagPrint'		=> $this->put('FlagPrint'),
					'FlagDelete'	=> $this->put('FlagDelete'),
					'FlagSelect'	=> $this->put('FlagSelect'),
					'FlagUpdate'	=> $this->put('FlagUpdate'),
					'EmployeeCode'	=> $this->put('EmployeeCode'),
					'ValidFrom'		=> $this->put('ValidFrom'),
					'ValidUntil'	=> $this->put('ValidUntil'),
					'_updated_by'	=> $this->put('_updated_by'),
					'_id'			=> $this->put('_id')
					);
					
		$this->db6->where('EmployeeCode', $EmployeeCode);
        $update = $this->db6->update('dblogin', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'NameOfForm'	=> $this->post('NameOfForm'),
					'FlagInsert'	=> $this->post('FlagInsert'),
					'FlagPrint'		=> $this->post('FlagPrint'),
					'FlagDelete'	=> $this->post('FlagDelete'),
					'FlagSelect'	=> $this->post('FlagSelect'),
					'FlagUpdate'	=> $this->post('FlagUpdate'),
					'EmployeeCode'	=> $this->post('EmployeeCode'),
					'ValidFrom'		=> $this->post('ValidFrom'),
					'ValidUntil'	=> $this->post('ValidUntil'),
					'_created_by'	=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dblogin', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}