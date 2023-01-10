<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fhl_4_freetextdescriptionofgoods extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $MessageKey = $this->get('MessageKey');
        if ($MessageKey == '') {
			$data = $this->db2->get('sending_fhl_4_freetextdescriptionofgoods')->result();            
        } else {
            $this->db2->where('MessageKey', $MessageKey);
            $data = $this->db2->get('sending_fhl_4_freetextdescriptionofgoods')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$MessageKey = $this->put('MessageKey');
        $data = array(	
					'MessageKey'		=> $this->put('MessageKey'),
					'MessageLineNo'		=> $this->put('MessageLineNo'),
					'LineIdentifier'	=> $this->put('LineIdentifier'),
					'HWBSerialNumber'	=> $this->put('HWBSerialNumber'),
					'FreeText1'			=> $this->put('FreeText1'),
					'FreeText2'			=> $this->put('FreeText2'),
					'FreeText3'			=> $this->put('FreeText3'),
					'FreeText4'			=> $this->put('FreeText4'),
					'FreeText5'			=> $this->put('FreeText5'),
					'FreeText6'			=> $this->put('FreeText6'),
					'FreeText7'			=> $this->put('FreeText7'),
					'FreeText8'			=> $this->put('FreeText8'),
					'FreeText9'			=> $this->put('FreeText9')
					);
					
		$this->db2->where('MessageKey', $MessageKey);
        $update = $this->db2->update('sending_fhl_4_freetextdescriptionofgoods', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'		=> $this->post('MessageKey'),
					'MessageLineNo'		=> $this->post('MessageLineNo'),
					'LineIdentifier'	=> $this->post('LineIdentifier'),
					'HWBSerialNumber'	=> $this->post('HWBSerialNumber'),
					'FreeText1'			=> $this->post('FreeText1'),
					'FreeText2'			=> $this->post('FreeText2'),
					'FreeText3'			=> $this->post('FreeText3'),
					'FreeText4'			=> $this->post('FreeText4'),
					'FreeText5'			=> $this->post('FreeText5'),
					'FreeText6'			=> $this->post('FreeText6'),
					'FreeText7'			=> $this->post('FreeText7'),
					'FreeText8'			=> $this->post('FreeText8'),
					'FreeText9'			=> $this->post('FreeText9')
					);
					
		 $insert = $this->db2->insert('sending_fhl_4_freetextdescriptionofgoods', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}