<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbairlines extends REST_Controller {
	
	private $db6;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db6 = $this->load->database('dbmscargo', TRUE);
	}
	
	function index_get() {
        $_id = $this->get('_id');
        if ($_id == '') {
			$data = $this->db6->get('dbairlines')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbairlines')->result();
        }
        $this->response($data, 200);
    }
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'airlinesname'		=> $this->put('airlinesname'),
					'airlinescode'		=> $this->put('airlinescode'),
					'kerjasama'			=> $this->put('kerjasama'),
					'WarehouseCode'		=> $this->put('WarehouseCode'),
					'_updated_by'		=> $this->put('_updated_by'),					
					'_id'				=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbairlines', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'airlinescode'		=> $this->post('airlinescode'),
					'airlinesname'		=> $this->post('airlinesname'),
					'kerjasama'			=> $this->post('kerjasama'),
					'WarehouseCode'		=> $this->post('WarehouseCode'),
					'_created_by'		=> $this->post('_created_by')					
					);
					
		 $insert = $this->db6->insert('dbairlines', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}