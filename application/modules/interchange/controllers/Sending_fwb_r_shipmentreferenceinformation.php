<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fwb_r_shipmentreferenceinformation extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fwb_r_shipmentreferenceinformation')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fwb_r_shipmentreferenceinformation')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'					=> $this->put('MessageLineNo'),
					'LineIdentifier'				=> $this->put('LineIdentifier'),
					'ReferenceNumber'				=> $this->put('ReferenceNumber'),
					'SupplementaryShipmentInfo1'	=> $this->put('SupplementaryShipmentInfo1'),
					'SupplementaryShipmentInfo2'	=> $this->put('SupplementaryShipmentInfo2'),
					'MessageKey'					=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fwb_r_shipmentreferenceinformation', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'					=> $this->post('MessageKey'),
					'MessageLineNo'					=> $this->post('MessageLineNo'),
					'LineIdentifier'				=> $this->post('LineIdentifier'),
					'ReferenceNumber'				=> $this->post('ReferenceNumber'),
					'SupplementaryShipmentInfo1'	=> $this->post('SupplementaryShipmentInfo1'),
					'SupplementaryShipmentInfo2'	=> $this->post('SupplementaryShipmentInfo2')
					);
					
		 $insert = $this->db2->insert('sending_fwb_r_shipmentreferenceinformation', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}