<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_ffm_9_specialcustomsinformation extends REST_Controller {
	
	private $db;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $Noid = $this->get('Noid');
        if ($Noid == '') {
			$data = $this->db2->get('sending_ffm_9_specialcustomsinformation')->result();            
        } else {
            $this->db2->where('Noid', $Noid);
            $data = $this->db2->get('sending_ffm_9_specialcustomsinformation')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$Noid = $this->put('Noid');
        $data = array(	
					'MessageLineNo'			=> $this->put('MessageLineNo'),
					'LineIdentifier'		=> $this->put('LineIdentifier'),
					'CustomsReference'		=> $this->put('CustomsReference'),
					'CustomsOriginCode'		=> $this->put('CustomsOriginCode'),
					'MessageKey'			=> $this->put('MessageKey')
					);
					
		$this->db2->where('Noid', $Noid);
        $update = $this->db2->update('sending_ffm_9_specialcustomsinformation', $data);
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
					'CustomsReference'		=> $this->post('CustomsReference'),
					'CustomsOriginCode'		=> $this->post('CustomsOriginCode')
					);
					
		 $insert = $this->db2->insert('sending_ffm_9_specialcustomsinformation', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}