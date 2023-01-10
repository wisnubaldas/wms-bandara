<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_ffm_1_messageidentifier extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $Noid = $this->get('Noid');
        if ($Noid == '') {
			$data = $this->db->get('sending_ffm_1_messageidentifier')->result();            
        } else {
            $this->db->where('Noid', $Noid);
            $data = $this->db->get('sending_ffm_1_messageidentifier')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$Noid = $this->put('Noid');
        $data = array(	
					'HostName'					=> $this->put('HostName'),
					'MessageKey'				=> $this->put('MessageKey'),
					'MessageLineNo'				=> $this->put('MessageLineNo'),
					'StandardMessageIdentifier'	=> $this->put('StandardMessageIdentifier'),
					'MessageTypeVersionNumber'	=> $this->put('MessageTypeVersionNumber'),
					'OriginalMessage'			=> $this->put('OriginalMessage'),
					'DateRetrieveMessage'		=> $this->put('DateRetrieveMessage'),
					'Manual'					=> $this->put('Manual'),
					'MessageSent'				=> $this->put('MessageSent')
					);
					
		$this->db->where('Noid', $Noid);
        $update = $this->db->update('sending_ffm_1_messageidentifier', $data);
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
					'DateRetrieveMessage'		=> $this->post('DateRetrieveMessage'),
					'Manual'					=> $this->post('Manual'),
					'MessageSent'				=> $this->post('MessageSent')
					);
					
		 $insert = $this->db->insert('sending_ffm_1_messageidentifier', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}