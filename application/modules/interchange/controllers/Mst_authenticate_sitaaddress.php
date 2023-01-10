<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Mst_authenticate_sitaaddress extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $DefaultHost = $this->get('DefaultHost');
        if ($DefaultHost == '') {
			$data = $this->db->get('mst_authenticate_sitaaddress')->result();            
        } else {
            $this->db->where('DefaultHost', $DefaultHost);
            $data = $this->db->get('mst_authenticate_sitaaddress')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$DefaultHost = $this->put('DefaultHost');
        $data = array(	
					'DefaultHost'		=> $this->put('DefaultHost'),
					'AirlineCode'		=> $this->put('AirlineCode'),
					'Route'				=> $this->put('Priority'),
					'Recipient'			=> $this->put('DoubleSig'),
					'void'				=> $this->put('EmailSender')
					);
					
		$this->db->where('DefaultHost', $DefaultHost);
        $update = $this->db->update('mst_authenticate_sitaaddress', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'DefaultHost'		=> $this->post('DefaultHost'),
					'AirlineCode'		=> $this->post('AirlineCode'),
					'Route'				=> $this->post('Priority'),
					'Recipient'			=> $this->post('DoubleSig'),
					'void'				=> $this->post('EmailSender')
					);
					
		 $insert = $this->db->insert('mst_authenticate_sitaaddress', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}