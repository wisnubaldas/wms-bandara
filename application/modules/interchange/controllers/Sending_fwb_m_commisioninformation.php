<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fwb_m_commisioninformation extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fwb_m_commisioninformation')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fwb_m_commisioninformation')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'						=> $this->put('MessageLineNo'),
					'LineIdentifier'					=> $this->put('LineIdentifier'),
					'CASSIndicator'						=> $this->put('CASSIndicator'),
					'CASSSettlementFactorAmount'		=> $this->put('CASSSettlementFactorAmount'),
					'CASSSettlementFactorPercentage'	=> $this->put('CASSSettlementFactorPercentage'),
					'MessageKey'						=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fwb_m_commisioninformation', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'						=> $this->post('MessageKey'),
					'MessageLineNo'						=> $this->post('MessageLineNo'),
					'LineIdentifier'					=> $this->post('LineIdentifier'),
					'CASSIndicator'						=> $this->post('CASSIndicator'),
					'CASSSettlementFactorAmount'		=> $this->post('CASSSettlementFactorAmount'),
					'CASSSettlementFactorPercentage'	=> $this->post('CASSSettlementFactorPercentage')
					);
					
		 $insert = $this->db2->insert('sending_fwb_m_commisioninformation', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}