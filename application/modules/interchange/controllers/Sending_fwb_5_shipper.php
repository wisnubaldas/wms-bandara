<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fwb_5_shipper extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fwb_5_shipper')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fwb_5_shipper')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(						
					'MessageLineNo'			=> $this->put('MessageLineNo'),
					'LineIdentifier'		=> $this->put('LineIdentifier'),
					'AccountNumber'			=> $this->put('AccountNumber'),
					'Name'					=> $this->put('Name'),
					'StreetAddress'			=> $this->put('StreetAddress'),
					'Place'					=> $this->put('Place'),
					'State'					=> $this->put('State'),
					'CountryCode'			=> $this->put('CountryCode'),
					'PostCode'				=> $this->put('PostCode'),
					'ContactIdentifier'		=> $this->put('ContactIdentifier'),
					'ContactNumber'			=> $this->put('ContactNumber'),
					'MessageKey'			=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fwb_5_shipper', $data);
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
					'AccountNumber'			=> $this->post('AccountNumber'),
					'Name'					=> $this->post('Name'),
					'StreetAddress'			=> $this->post('StreetAddress'),
					'Place'					=> $this->post('Place'),
					'State'					=> $this->post('State'),
					'CountryCode'			=> $this->post('CountryCode'),
					'PostCode'				=> $this->post('PostCode'),
					'ContactIdentifier'		=> $this->post('ContactIdentifier'),
					'ContactNumber'			=> $this->post('ContactNumber')
					);
					
		 $insert = $this->db2->insert('sending_fwb_5_shipper', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}