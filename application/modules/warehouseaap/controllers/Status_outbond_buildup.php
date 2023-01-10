<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Status_outbond_buildup extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('db_tpsonline', TRUE);
	}
	
	function index_get() {
        $id_ = $this->get('id_');
        if ($id_ == '') {
			$data = $this->db->get('td_outbond_buildup')->result();            
        } else {
            $this->db->where('id_', $id_);
            $data = $this->db->get('td_outbond_buildup')->result();
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
        $update = $this->db->update('td_outbond_buildup', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'id_header'			=> $this->post('id_header'),
					'status_date'		=> $this->post('status_date'),
					'status_time'		=> $this->post('status_time'),
					);
					
		 $insert = $this->db->insert('td_outbond_buildup', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}