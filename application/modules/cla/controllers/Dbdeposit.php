<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbdeposit extends REST_Controller {
	
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
			$data = $this->db6->get('dbdeposit')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbdeposit')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(						
					'ClientRegistration'	=> $this->put('ClientRegistration'),
					'PICname'				=> $this->put('PICname'),
					'Telp'					=> $this->put('Telp'),
					'DateFrom'				=> $this->put('DateFrom'),
					'DateUntil'				=> $this->put('DateUntil'),
					'Ekspor'				=> $this->put('Ekspor'),
					'Domestik'				=> $this->put('Domestik'),
					'TotalDeposit'			=> $this->put('TotalDeposit'),
					'_updated_by'			=> $this->put('_updated_by'),	
					'_id'					=> $this->put('_id'),
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbdeposit', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'ClientRegistration'	=> $this->post('ClientRegistration'),
					'PICname'				=> $this->post('PICname'),
					'Telp'					=> $this->post('Telp'),
					'DateFrom'				=> $this->post('DateFrom'),
					'DateUntil'				=> $this->post('DateUntil'),
					'Ekspor'				=> $this->post('Ekspor'),
					'Domestik'				=> $this->post('Domestik'),
					'TotalDeposit'			=> $this->post('TotalDeposit'),
					'_created_by'			=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbdeposit', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}