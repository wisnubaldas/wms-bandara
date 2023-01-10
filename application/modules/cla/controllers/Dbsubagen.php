<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbsubagen extends REST_Controller {
	
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
			$data = $this->db6->get('_id')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('_id')->result();
        }
        $this->response($data, 200);
    }
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'AgenCode'		=> $this->put('AgenCode'),
					'subAgen'		=> $this->put('subAgen'),
					'Address'		=> $this->put('Address'),
					'City'			=> $this->put('City'),
					'Zipcode'		=> $this->put('Zipcode'),
					'_updated_by'	=> $this->put('_updated_by'),
					'_id'			=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbsubagen', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'AgenCode'		=> $this->post('AgenCode'),
					'subAgen'		=> $this->post('subAgen'),
					'Address'		=> $this->post('Address'),
					'City'			=> $this->post('City'),
					'Zipcode'		=> $this->post('Zipcode'),
					'_created_by'	=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbsubagen', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}