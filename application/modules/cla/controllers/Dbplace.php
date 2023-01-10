<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbplace extends REST_Controller {
	
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
			$data = $this->db6->get('dbplace')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbplace')->result();
        }
        $this->response($data, 200);
    }
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'CityName'		=> $this->put('CityName'),
					'IdCountry'		=> $this->put('IdCountry'),
					'IdCity'		=> $this->put('IdCity'),
					'_updated_by'	=> $this->put('_updated_by'),	
					'_id'			=> $this->put('_id')
					);
					
		$this->db6->where('_id',$_id);
        $update = $this->db6->update('dbplace', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'IdCity'		=> $this->post('IdCity'),
					'CityName'		=> $this->post('CityName'),
					'IdCountry'		=> $this->post('IdCountry'),
					'_created_by'	=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbplace', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}