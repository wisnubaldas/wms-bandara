<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbcargo_detail extends REST_Controller {
	
	private $db6;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db6 = $this->load->database('dbmscargo', TRUE);
	}
	
	function index_get() {
        $idnumber = $this->get('_id');
        if ($_id == '') {
			$data = $this->db6->get('dbcargo_detail')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbcargo_detail')->result();
        }
        $this->response($data, 200);
    }

	function index_put() {
		$_id  = $this->put('_id');	
        $data = array(					
					'id_header'			=> $this->put('id_header'),	
					'CWPnumber'			=> $this->put('CWPnumber'),					
					'MasterAWB'			=> $this->put('MasterAWB'),
					'RCWPnumber'		=> $this->put('RCWPnumber'),
					'NameOfDo'			=> $this->put('NameOfDo'),
					'HostAWB'			=> $this->put('HostAWB'),
					'TypeOfCargo'		=> $this->put('TypeOfCargo'),
					'Pieces'			=> $this->put('Pieces'),
					'GrossNet'			=> $this->put('GrossNet'),
					'Netto'				=> $this->put('Netto'),
					'Pallet'			=> $this->put('Pallet'),
					'NatureOfGood'		=> $this->put('NatureOfGood'),
					'FlagDo'			=> $this->put('FlagDo'),
					'xrayOfficer'		=> $this->put('xrayOfficer'),
					'DriverName'		=> $this->put('DriverName'),
					'FlatOfCar'			=> $this->put('FlatOfCar'),
					'SealNumber'		=> $this->put('SealNumber'),
					'Supervisor'		=> $this->put('Supervisor'),
					'HandlerOps'		=> $this->put('HandlerOps'),
					'AirlinesOps'		=> $this->put('AirlinesOps'),
					'PrintDO'			=> $this->put('PrintDO'),
					'StikerNo'			=> $this->put('StikerNo'),
					'WarehouseCode'		=> $this->put('WarehouseCode'),
					'EmployeeCodeDo'	=> $this->put('EmployeeCodeDo'),
					'DateOfDo'			=> $this->put('DateOfDo'),
					'TimeOfDo'			=> $this->put('TimeOfDo'),
					'CSDNumber'			=> $this->put('CSDNumber'),
					'_updated_by'		=> $this->put('_updated_by'),	
					'_id'				=> $this->put('_id')	
					);
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbcargo_detail', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(
					'id_header'			=> $this->post('id_header'),
					'CWPnumber'			=> $this->post('CWPnumber'),
					'MasterAWB'			=> $this->post('MasterAWB'),
					'RCWPnumber'		=> $this->post('RCWPnumber'),
					'NameOfDo'			=> $this->post('NameOfDo'),
					'HostAWB'			=> $this->post('HostAWB'),
					'TypeOfCargo'		=> $this->post('TypeOfCargo'),
					'Pieces'			=> $this->post('Pieces'),
					'GrossNet'			=> $this->post('GrossNet'),
					'Netto'				=> $this->post('Netto'),
					'Pallet'			=> $this->post('Pallet'),
					'NatureOfGood'		=> $this->post('NatureOfGood'),
					'FlagDo'			=> $this->post('FlagDo'),
					'xrayOfficer'		=> $this->post('xrayOfficer'),
					'DriverName'		=> $this->post('DriverName'),
					'FlatOfCar'			=> $this->post('FlatOfCar'),
					'SealNumber'		=> $this->post('SealNumber'),
					'Supervisor'		=> $this->post('Supervisor'),
					'HandlerOps'		=> $this->post('HandlerOps'),
					'AirlinesOps'		=> $this->post('AirlinesOps'),
					'PrintDO'			=> $this->post('PrintDO'),
					'StikerNo'			=> $this->post('StikerNo'),
					'WarehouseCode'		=> $this->post('WarehouseCode'),
					'EmployeeCodeDo'	=> $this->post('EmployeeCodeDo'),
					'DateOfDo'			=> $this->post('DateOfDo'),
					'TimeOfDo'			=> $this->post('TimeOfDo'),
					'CSDNumber'			=> $this->post('CSDNumber'),
					'_created_by'		=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbcargo_detail', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}