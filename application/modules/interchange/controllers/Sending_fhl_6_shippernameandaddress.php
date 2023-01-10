<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fhl_6_shippernameandaddress extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $MessageKey = $this->get('MessageKey');
        if ($MessageKey == '') {
			$data = $this->db2->get('sending_fhl_6_shippernameandaddress')->result();            
        } else {
            $this->db2->where('MessageKey', $MessageKey);
            $data = $this->db2->get('sending_fhl_6_shippernameandaddress')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$MessageKey = $this->put('MessageKey');
        $data = array(	
					'MessageKey'			=> $this->put('MessageKey'),
					'MessageLineNo'			=> $this->put('MessageLineNo'),
					'LineIdentifier'		=> $this->put('LineIdentifier'),
					'Name'					=> $this->put('Name'),
					'StreetAddress'			=> $this->put('StreetAddress'),
					'Place'					=> $this->put('Place'),
					'State'					=> $this->put('State'),
					'CountryCode'			=> $this->put('CountryCode'),
					'PostCode'				=> $this->put('PostCode'),
					'ContactIdentifier'		=> $this->put('ContactIdentifier'),
					'ContactNumber'			=> $this->put('ContactNumber')			
					);
		$this->db2->where('MessageKey', $MessageKey);
        $update = $this->db2->update('sending_fhl_6_shippernameandaddress', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'			=> $this->post('MessageKey'),
					'MessageLineNo'			=> $this->post('MessageLineNo'),
					'LineIdentifier'		=> $this->post('LineIdentifier'),
					'Name'					=> $this->post('Name'),
					'StreetAddress'			=> $this->post('StreetAddress'),
					'Place'					=> $this->post('Place'),
					'State'					=> $this->post('State'),
					'CountryCode'			=> $this->post('CountryCode'),
					'PostCode'				=> $this->post('PostCode'),
					'ContactIdentifier'		=> $this->post('ContactIdentifier'),
					'ContactNumber'			=> $this->post('ContactNumber')			
					);
					
		$insert = $this->db2->insert('sending_fhl_6_shippernameandaddress', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}