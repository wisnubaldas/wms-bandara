<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbcountry extends REST_Controller {
	
	private $db6;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db6 = $this->load->database('dbmscargo', TRUE);
	}
	
	function index_get() {
        $IdCountry = $this->get('IdCountry');
        if ($IdCountry == '') {
			$data = $this->db6->get('dbcountry')->result();            
        } else {
            $this->db6->where('IdCountry', $IdCountry);
            $data = $this->db6->get('dbcountry')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$IdCountry = $this->put('IdCountry');
        $data = array(	
					'IdCountry'		=> $this->put('IdCountry'),
					'CountryName'	=> $this->put('CountryName'),
					'_updated_by'	=> $this->put('_updated_by')
					);
					
		$this->db6->where('IdCountry', $IdCountry);
        $update = $this->db6->update('dbcountry', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'IdCountry'		=> $this->post('IdCountry'),
					'CountryName'	=> $this->post('CountryName'),
					'_created_by'	=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbcountry', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}