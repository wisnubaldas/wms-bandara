<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class DbDelivery extends REST_Controller {
	
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
			$data = $this->db6->get('dbdelivery')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbdelivery')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'NameOfDo'			=> $this->put('NameOfDo'),
					'MasterAWB'			=> $this->put('MasterAWB'),
					'DriverName'		=> $this->put('DriverName'),
					'FlatOfCar'			=> $this->put('FlatOfCar'),
					'SealNumber'		=> $this->put('SealNumber'),
					'Supervisor'		=> $this->put('Supervisor'),
					'HandlerOps'		=> $this->put('HandlerOps'),
					'AirlinesOps'		=> $this->put('AirlinesOps'),
					'WarehouseCode'		=> $this->put('WarehouseCode'),
					'DateOfDO'			=> $this->put('DateOfDO'),
					'TimeOfDO'			=> $this->put('TimeOfDO'),
					'StikerNo'			=> $this->put('StikerNo'),
					'WarehouseName'		=> $this->put('WarehouseName'),
					'Pieces'			=> $this->put('Pieces'),
					'Netto'				=> $this->put('Netto'),
					'AirlinesCode'		=> $this->put('AirlinesCode'),
					'Destination'		=> $this->put('Destination'),
					'FlightNo'			=> $this->put('FlightNo'),
					'EmployeeCode'		=> $this->put('EmployeeCode'),		
					'_updated_by'		=> $this->put('_updated_by'),						
					'_id'				=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbdelivery', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'NameOfDo'			=> $this->post('NameOfDo'),
					'MasterAWB'			=> $this->post('MasterAWB'),
					'DriverName'		=> $this->post('DriverName'),
					'FlatOfCar'			=> $this->post('FlatOfCar'),
					'SealNumber'		=> $this->post('SealNumber'),
					'Supervisor'		=> $this->post('Supervisor'),
					'HandlerOps'		=> $this->post('HandlerOps'),
					'AirlinesOps'		=> $this->post('AirlinesOps'),
					'WarehouseCode'		=> $this->post('WarehouseCode'),
					'DateOfDO'			=> $this->post('DateOfDO'),
					'TimeOfDO'			=> $this->post('TimeOfDO'),
					'StikerNo'			=> $this->post('StikerNo'),
					'WarehouseName'		=> $this->post('WarehouseName'),
					'Pieces'			=> $this->post('Pieces'),
					'Netto'				=> $this->post('Netto'),
					'AirlinesCode'		=> $this->post('AirlinesCode'),
					'Destination'		=> $this->post('Destination'),
					'FlightNo'			=> $this->post('FlightNo'),
					'EmployeeCode'		=> $this->post('EmployeeCode'),
					'_created_by'		=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbdelivery', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}