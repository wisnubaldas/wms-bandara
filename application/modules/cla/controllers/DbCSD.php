<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class DbCSD extends REST_Controller {
	
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
			$data = $this->db6->get('dbcsd')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbcsd')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(						
					'RaEntity'			=> $this->put('RaEntity'),
					'AWB'			    => $this->put('AWB'),					
					'CWPNumber'			=> $this->put('CWPNumber'),
					'CheckConsol'		=> $this->put('CheckConsol'),					
					'Origin'			=> $this->put('Origin'),
					'Destination'		=> $this->put('Destination'),
					'Transit'			=> $this->put('Transit'),						
					'Security'			=> $this->put('Security'),
					'Received'			=> $this->put('Received'),					
					'Screening'			=> $this->put('Screening'),
					'Grounds'			=> $this->put('Grounds'),					
					'Others'			=> $this->put('Others'),
					'ID_name'			=> $this->put('ID_name'),
					'DateOfCSD'			=> $this->put('DateOfCSD'),
					'TimeOfCSD'			=> $this->put('TimeOfCSD'),					
					'PartyCategory'		=> $this->put('PartyCategory'),
					'AWBno'			    => $this->put('AWBno'),
					'AirlinesCode'		=> $this->put('AirlinesCode'),		
					'DateOfFlight'		=> $this->put('DateOfFlight'),
					'NoFlight'			=> $this->put('NoFlight'),
					'Quantity'			=> $this->put('Quantity'),
					'ActWeight'			=> $this->put('ActWeight'),
					'Volume'			=> $this->put('Volume'),
					'Remarks'			=> $this->put('Remarks'),					
					'Additional'		=> $this->put('Additional'),
					'ContentsGood'		=> $this->put('ContentsGood'),
					'ShipperCode'		=> $this->put('ShipperCode'),
					'ShipperName'		=> $this->put('ShipperName'),
					'TruckReg'			=> $this->put('TruckReg'),							
					'SolidPlasctic'		=> $this->put('SolidPlasctic'),
					'DriverName'		=> $this->put('DriverName'),
					'NoKwitansi'		=> $this->put('NoKwitansi'),
					'NameOfDo'			=> $this->put('NameOfDo'),					
					'TypeOfCargo'		=> $this->put('TypeOfCargo'),
					'TypeOfFlight'		=> $this->put('TypeOfFlight'),
					'FlagDo'			=> $this->put('FlagDo'),
					'FlagReceipt'		=> $this->put('FlagReceipt'),
					'NatureOfGood'		=> $this->put('NatureOfGood'),					
					'UserOfVoid'		=> $this->put('UserOfVoid'),
					'DateOfVoid'		=> $this->put('DateOfVoid'),					
					'TimeOfVoid'		=> $this->put('TimeOfVoid'),
					'Description'		=> $this->put('Description'),				
					'ForwaderName'		=> $this->put('ForwaderName'),
					'RCSDNumber'		=> $this->put('RCSDNumber'),
					'CSDNumber'			=> $this->put('CSDNumber'),					
					'EmployeeCode'		=> $this->put('EmployeeCode'),
					'_updated_by'		=> $this->put('_updated_by'),
					'_id'				=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbcsd', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(				
					'CSDNumber'			=> $this->post('CSDNumber'),
					'RaEntity'			=> $this->post('RaEntity'),
					'AWB'			    => $this->post('AWB'),					
					'CWPNumber'			=> $this->post('CWPNumber'),
					'CheckConsol'		=> $this->post('CheckConsol'),					
					'Origin'			=> $this->post('Origin'),
					'Destination'		=> $this->post('Destination'),
					'Transit'			=> $this->post('Transit'),						
					'Security'			=> $this->post('Security'),
					'Received'			=> $this->post('Received'),					
					'Screening'			=> $this->post('Screening'),
					'Grounds'			=> $this->post('Grounds'),					
					'Others'			=> $this->post('Others'),
					'ID_name'			=> $this->post('ID_name'),
					'DateOfCSD'			=> $this->post('DateOfCSD'),
					'TimeOfCSD'			=> $this->post('TimeOfCSD'),					
					'PartyCategory'		=> $this->post('PartyCategory'),
					'AWBno'			    => $this->post('AWBno'),
					'AirlinesCode'		=> $this->post('AirlinesCode'),		
					'DateOfFlight'		=> $this->post('DateOfFlight'),
					'NoFlight'			=> $this->post('NoFlight'),
					'Quantity'			=> $this->post('Quantity'),
					'ActWeight'			=> $this->post('ActWeight'),
					'Volume'			=> $this->post('Volume'),
					'Remarks'			=> $this->post('Remarks'),					
					'Additional'		=> $this->post('Additional'),
					'ContentsGood'		=> $this->post('ContentsGood'),
					'ShipperCode'		=> $this->post('ShipperCode'),
					'ShipperName'		=> $this->post('ShipperName'),
					'TruckReg'			=> $this->post('TruckReg'),							
					'SolidPlasctic'		=> $this->post('SolidPlasctic'),
					'DriverName'		=> $this->post('DriverName'),
					'NoKwitansi'		=> $this->post('NoKwitansi'),
					'NameOfDo'			=> $this->post('NameOfDo'),					
					'TypeOfCargo'		=> $this->post('TypeOfCargo'),
					'TypeOfFlight'		=> $this->post('TypeOfFlight'),
					'FlagDo'			=> $this->post('FlagDo'),
					'FlagReceipt'		=> $this->post('FlagReceipt'),
					'NatureOfGood'		=> $this->post('NatureOfGood'),					
					'UserOfVoid'		=> $this->post('UserOfVoid'),
					'DateOfVoid'		=> $this->post('DateOfVoid'),					
					'TimeOfVoid'		=> $this->post('TimeOfVoid'),
					'Description'		=> $this->post('Description'),				
					'ForwaderName'		=> $this->post('ForwaderName'),
					'RCSDNumber'		=> $this->post('RCSDNumber'),
					'EmployeeCode'		=> $this->post('EmployeeCode'),
					'_created_by'		=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbcsd', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}