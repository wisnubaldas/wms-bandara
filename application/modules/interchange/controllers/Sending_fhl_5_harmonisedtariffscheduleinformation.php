<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fhl_5_harmonisedtariffscheduleinformation extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $MessageKey = $this->get('MessageKey');
        if ($MessageKey == '') {
			$data = $this->db2->get('sending_fhl_5_harmonisedtariffscheduleinformation')->result();            
        } else {
            $this->db2->where('MessageKey', $MessageKey);
            $data = $this->db2->get('sending_fhl_5_harmonisedtariffscheduleinformation')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$MessageKey = $this->put('MessageKey');
        $data = array(	
					'MessageKey'				=> $this->put('MessageKey'),
					'MessageLineNo'				=> $this->put('MessageLineNo'),
					'LineIdentifier'			=> $this->put('LineIdentifier'),
					'HWBSerialNumber'			=> $this->put('HWBSerialNumber'),
					'HarmonisedCommodityCode1'	=> $this->put('HarmonisedCommodityCode1'),
					'HarmonisedCommodityCode2'	=> $this->put('HarmonisedCommodityCode2'),
					'HarmonisedCommodityCode3'	=> $this->put('HarmonisedCommodityCode3'),
					'HarmonisedCommodityCode4'	=> $this->put('HarmonisedCommodityCode4'),
					'HarmonisedCommodityCode5'	=> $this->put('HarmonisedCommodityCode5'),
					'HarmonisedCommodityCode6'	=> $this->put('HarmonisedCommodityCode6'),
					'HarmonisedCommodityCode7'	=> $this->put('HarmonisedCommodityCode7'),
					'HarmonisedCommodityCode8'	=> $this->put('HarmonisedCommodityCode8'),
					'HarmonisedCommodityCode9'	=> $this->put('HarmonisedCommodityCode9')
					);
					
		$this->db2->where('MessageKey', $MessageKey);
        $update = $this->db2->update('sending_fhl_5_harmonisedtariffscheduleinformation', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'				=> $this->post('MessageKey'),
					'MessageLineNo'				=> $this->post('MessageLineNo'),
					'LineIdentifier'			=> $this->post('LineIdentifier'),
					'HWBSerialNumber'			=> $this->post('HWBSerialNumber'),
					'HarmonisedCommodityCode1'	=> $this->post('HarmonisedCommodityCode1'),
					'HarmonisedCommodityCode2'	=> $this->post('HarmonisedCommodityCode2'),
					'HarmonisedCommodityCode3'	=> $this->post('HarmonisedCommodityCode3'),
					'HarmonisedCommodityCode4'	=> $this->post('HarmonisedCommodityCode4'),
					'HarmonisedCommodityCode5'	=> $this->post('HarmonisedCommodityCode5'),
					'HarmonisedCommodityCode6'	=> $this->post('HarmonisedCommodityCode6'),
					'HarmonisedCommodityCode7'	=> $this->post('HarmonisedCommodityCode7'),
					'HarmonisedCommodityCode8'	=> $this->post('HarmonisedCommodityCode8'),
					'HarmonisedCommodityCode9'	=> $this->post('HarmonisedCommodityCode9')
					);
					
		 $insert = $this->db2->insert('sending_fhl_5_harmonisedtariffscheduleinformation', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}