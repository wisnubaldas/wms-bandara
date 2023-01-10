<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fhl_1_standardmessageindentification extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $MessageKey = $this->get('MessageKey');
        if ($MessageKey == '') {
			$data = $this->db2->get('sending_fhl_1_standardmessageindentification')->result();            
        } else {
            $this->db2->where('MessageKey', $MessageKey);
            $data = $this->db2->get('sending_fhl_1_standardmessageindentification')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$MessageKey = $this->put('MessageKey');
        $data = array(	
					'HostName'					=> $this->put('HostName'),
					'MessageKey'				=> $this->put('MessageKey'),
					'MessageLineNo'				=> $this->put('MessageLineNo'),
					'StandardMessageIdentifier'	=> $this->put('StandardMessageIdentifier'),
					'MessageTypeVersionNumber'	=> $this->put('MessageTypeVersionNumber'),
					'OriginalMessage'			=> $this->put('OriginalMessage'),
					'DateRetrieveMessage'		=> $this->put('DateRetrieveMessage')
					);
					
		$this->db2->where('MessageKey', $MessageKey);
        $update = $this->db2->update('sending_fhl_1_standardmessageindentification', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'HostName'					=> $this->post('HostName'),
					'MessageKey'				=> $this->post('MessageKey'),
					'MessageLineNo'				=> $this->post('MessageLineNo'),
					'StandardMessageIdentifier'	=> $this->post('StandardMessageIdentifier'),
					'MessageTypeVersionNumber'	=> $this->post('MessageTypeVersionNumber'),
					'OriginalMessage'			=> $this->post('OriginalMessage'),
					'DateRetrieveMessage'		=> $this->post('DateRetrieveMessage')
					);
					
		 $insert = $this->db2->insert('sending_fhl_1_standardmessageindentification', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}