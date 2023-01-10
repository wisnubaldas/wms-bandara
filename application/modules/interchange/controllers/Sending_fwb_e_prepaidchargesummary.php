<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fwb_e_prepaidchargesummary extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fwb_e_prepaidchargesummary')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fwb_e_prepaidchargesummary')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'			=> $this->put('MessageLineNo'),
					'LineIdentifier'		=> $this->put('LineIdentifier'),
					'ChargeIdentifierWT'	=> $this->put('ChargeIdentifierWT'),
					'ChargeAmountWT'		=> $this->put('ChargeAmountWT'),
					'ChargeIdentifierVC'	=> $this->put('ChargeIdentifierVC'),
					'ChargeAmountVC'		=> $this->put('ChargeAmountVC'),
					'ChargeIdentifierTX'	=> $this->put('ChargeIdentifierTX'),
					'ChargeAmountTX'		=> $this->put('ChargeAmountTX'),
					'ChargeIdentifierOA'	=> $this->put('ChargeIdentifierOA'),
					'ChargeAmountOA'		=> $this->put('ChargeAmountOA'),
					'ChargeIdentifierOC'	=> $this->put('ChargeIdentifierOC'),
					'ChargeAmountOC'		=> $this->put('ChargeAmountOC'),
					'ChargeIdentifierCT'	=> $this->put('ChargeIdentifierCT'),
					'ChargeAmountCT'		=> $this->put('ChargeAmountCT'),
					'MessageKey'			=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fwb_e_prepaidchargesummary', $data);
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
					'ChargeIdentifierWT'	=> $this->post('ChargeIdentifierWT'),
					'ChargeAmountWT'		=> $this->post('ChargeAmountWT'),
					'ChargeIdentifierVC'	=> $this->post('ChargeIdentifierVC'),
					'ChargeAmountVC'		=> $this->post('ChargeAmountVC'),
					'ChargeIdentifierTX'	=> $this->post('ChargeIdentifierTX'),
					'ChargeAmountTX'		=> $this->post('ChargeAmountTX'),
					'ChargeIdentifierOA'	=> $this->post('ChargeIdentifierOA'),
					'ChargeAmountOA'		=> $this->post('ChargeAmountOA'),
					'ChargeIdentifierOC'	=> $this->post('ChargeIdentifierOC'),
					'ChargeAmountOC'		=> $this->post('ChargeAmountOC'),
					'ChargeIdentifierCT'	=> $this->post('ChargeIdentifierCT'),
					'ChargeAmountCT'		=> $this->post('ChargeAmountCT')
					);
					
		 $insert = $this->db2->insert('sending_fwb_e_prepaidchargesummary', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}