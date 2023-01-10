<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Status_inbound_delivery_aircarft extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('db_tpsonline', TRUE);
	}
	
	function index_get() {
        $noid = $this->get('id_');
        if ($id_ == '') {
			$data = $this->db->get('td_inbound_delivery_aircarft')->result();            
        } else {
            $this->db->where('id_', $id_);
            $data = $this->db->get('td_inbound_delivery_aircarft')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id_ = $this->put('id_');
        $data = array(	
					'id_header'			=> $this->put('id_header'),
					'status_date'		=> $this->put('status_date'),
					'status_time'		=> $this->put('status_time'),
					'id_'				=> $this->put('id_')
					);
		$this->db->where('id_', $id_);
        $update = $this->db->update('td_inbound_delivery_aircarft', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'id_header'			=> $this->POST('id_header'),
					'status_date'		=> $this->POST('status_date'),
					'status_time'		=> $this->POST('status_time')
					);
					
		 $insert = $this->db->insert('td_inbound_delivery_aircarft', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}