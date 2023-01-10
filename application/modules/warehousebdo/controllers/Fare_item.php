<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Fare_item extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('rdwarehouse_bdo', TRUE);
	}
	
	function index_get() {
        $noid = $this->get('noid');
        if ($noid == '') {
			$data = $this->db->get('fare_item')->result();            
        } else {
            $this->db->where('noid', $noid);
            $data = $this->db->get('fare_item')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$noid = $this->put('noid');
        $data = array(	
					'ItemCode'			=> $this->put('ItemCode'),
					'ItemDescription'	=> $this->put('ItemDescription'),
					'noid'				=> $this->put('noid')
					);
		$this->db->where('noid', $noid);
        $update = $this->db->update('fare_item', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'ItemCode'			=> $this->post('ItemCode'),
					'ItemDescription'	=> $this->post('ItemDescription')
					);
					
		 $insert = $this->db->insert('fare_item', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}