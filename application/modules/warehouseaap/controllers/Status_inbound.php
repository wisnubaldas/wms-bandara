<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Status_inbound extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('db_tpsonline', TRUE);
	}
	
	function index_get() {
        $id_ = $this->get('id_');
        if ($id_ == '') {
			$data = $this->db->get('th_inbound')->result();            
        } else {
            $this->db->where('id_', $id_);
            $data = $this->db->get('th_inbound')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id_ = $this->put('id_');
        $data = array(	
					'tps'				=> $this->put('tps'),
					'gate_type'			=> $this->put('gate_type'),
					'waybill_smu'		=> $this->put('waybill_smu'),
					'hawb'				=> $this->put('hawb'),
					'koli'				=> $this->put('koli'),
					'netto'				=> $this->put('netto'),
					'volume'			=> $this->put('volume'),
					'kindofgood'		=> $this->put('kindofgood'),
					'airline_code'		=> $this->put('airline_code'),
					'flight_no'			=> $this->put('flight_no'),
					'origin'			=> $this->put('origin'),
					'transit'			=> $this->put('transit'),
					'dest'				=> $this->put('dest'),
					'shipper_name'		=> $this->put('shipper_name'),
					'consignee_name'	=> $this->put('consignee_name'),
					'id_'				=> $this->put('id_')
					);
		$this->db->where('id_', $id_);
        $update = $this->db->update('th_inbound', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'tps'				=> $this->post('tps'),
					'gate_type'			=> $this->post('gate_type'),
					'waybill_smu'		=> $this->post('waybill_smu'),
					'hawb'				=> $this->post('hawb'),
					'koli'				=> $this->post('koli'),
					'netto'				=> $this->post('netto'),
					'volume'			=> $this->post('volume'),
					'kindofgood'		=> $this->post('kindofgood'),
					'airline_code'		=> $this->post('airline_code'),
					'flight_no'			=> $this->post('flight_no'),
					'origin'			=> $this->post('origin'),
					'transit'			=> $this->post('transit'),
					'dest'				=> $this->post('dest'),
					'shipper_name'		=> $this->post('shipper_name'),
					'consignee_name'	=> $this->post('consignee_name')
					);
					
		 $insert = $this->db->insert('th_inbound', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}