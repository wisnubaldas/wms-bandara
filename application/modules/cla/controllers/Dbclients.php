<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbclients extends REST_Controller {
	
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
			$data = $this->db6->get('dbclients')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbclients')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'inisialName'			=> $this->put('inisialName'),
					'CompanyName'			=> $this->put('CompanyName'),
					'Address1'				=> $this->put('Address1'),
					'Address2'				=> $this->put('Address2'),
					'ZipCode'				=> $this->put('ZipCode'),
					'City'					=> $this->put('City'),
					'IdState'				=> $this->put('IdState'),
					'Phone'					=> $this->put('Phone'),
					'Faximile'				=> $this->put('Faximile'),
					'PICname'				=> $this->put('PICname'),
					'Email'					=> $this->put('Email'),
					'NPWP'					=> $this->put('NPWP'),
					'EmployeeCode'			=> $this->put('EmployeeCode'),
					'ClientRegistration'	=> $this->put('ClientRegistration'),
					'_updated_by'			=> $this->put('_updated_by'),
					'_id'					=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbclients', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'inisialName'			=> $this->post('inisialName'),
					'ClientRegistration'	=> $this->post('ClientRegistration'),
					'CompanyName'			=> $this->post('CompanyName'),
					'Address1'				=> $this->post('Address1'),
					'Address2'				=> $this->post('Address2'),
					'ZipCode'				=> $this->post('ZipCode'),
					'City'					=> $this->post('City'),
					'IdState'				=> $this->post('IdState'),
					'Phone'					=> $this->post('Phone'),
					'Faximile'				=> $this->post('Faximile'),
					'PICname'				=> $this->post('PICname'),
					'Email'					=> $this->post('Email'),
					'NPWP'					=> $this->post('NPWP'),
					'EmployeeCode'			=> $this->post('EmployeeCode'),
					'_created_by'			=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbclients', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}