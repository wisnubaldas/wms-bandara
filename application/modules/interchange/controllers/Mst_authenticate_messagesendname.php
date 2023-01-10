<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Mst_authenticate_messagesendname extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $DefaultHost = $this->get('DefaultHost');
        if ($DefaultHost == '') {
			$data = $this->db->get('mst_authenticate_messagesendname')->result();            
        } else {
            $this->db->where('DefaultHost', $DefaultHost);
            $data = $this->db->get('mst_authenticate_messagesendname')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$DefaultHost = $this->put('NumberId');
        $data = array(	
					'DefaultHost'		=> $this->put('DefaultHost'),
					'MessageCode'		=> $this->put('MessageCode'),
					'VersionCargoImp'	=> $this->put('VersionCargoImp')
					);
					
		$this->db->where('NumberId', $NumberId);
        $update = $this->db->update('mst_authenticate_messagesendname', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'DefaultHost'		=> $this->post('DefaultHost'),
					'MessageCode'		=> $this->post('MessageCode'),
					'VersionCargoImp'	=> $this->post('VersionCargoImp')
					);
					
		 $insert = $this->db->insert('mst_authenticate_messagesendname', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}