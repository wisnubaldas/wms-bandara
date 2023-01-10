<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class DbWarehouse extends REST_Controller {
	
	private $db6;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db6 = $this->load->database('dbmscargo', TRUE);
	}
	
	function index_get() {
        $WarehouseCode = $this->get('WarehouseCode');
        if ($WarehouseCode == '') {
			$data = $this->db6->get('dbWarehouse')->result();            
        } else {
            $this->db6->where('WarehouseCode', $WarehouseCode);
            $data = $this->db6->get('dbWarehouse')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$WarehouseCode = $this->put('WarehouseCode');
        $data = array(	
					'WarehouseCode'	=> $this->put('WarehouseCode'),
					'WarehouseName'	=> $this->put('WarehouseName'),
					'_updated_by'	=> $this->put('_updated_by')	
					);
					
		$this->db6->where('WarehouseCode', $WarehouseCode);
        $update = $this->db6->update('dbWarehouse', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'WarehouseCode'	=> $this->post('WarehouseCode'),
					'WarehouseName'	=> $this->post('WarehouseName'),
					'_created_by'	=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbWarehouse', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}