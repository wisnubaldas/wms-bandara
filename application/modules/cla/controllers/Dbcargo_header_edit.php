<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbcargo_header_edit extends REST_Controller {
	
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
			$data = $this->db6->get('dbcargo_header_edit')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbcargo_header_edit')->result();
        }
        $this->response($data, 200);
    }
	 
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'MasterAWB'			=> $this->put('MasterAWB'),					
					'AirlinesCode'		=> $this->put('AirlinesCode'),	
					'Dest'				=> $this->put('Dest'),	
					'flightno'			=> $this->put('flightno'),	
					'agenCode'			=> $this->put('agenCode'),	
					'ShipperCode'		=> $this->put('ShipperCode'),
					'ShipperName'		=> $this->put('ShipperName'),	
					'Pieces'			=> $this->put('Pieces'),	
					'Gross'				=> $this->put('Gross'),	
					'Netto'				=> $this->put('Netto'),					
					'DateOfEntry'		=> $this->put('DateOfEntry'),	
					'TimeOfEntry'		=> $this->put('TimeOfEntry'),	
					'EmployeeCode'		=> $this->put('EmployeeCode'),	
					'FlagReceipt'		=> $this->put('FlagReceipt'),							
					'TypeOfCargo'		=> $this->put('TypeOfCargo'),	
					'TypeOfFlight'		=> $this->put('TypeOfFlight'),					
					'TimeOfFlight'		=> $this->put('TimeOfFlight'),		
					'_updated_by'		=> $this->put('_updated_by'),						
					'_id'				=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbcargo_header_edit', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'CWPnumber'			=> $this->post('CWPnumber'),		
					'MasterAWB'			=> $this->post('MasterAWB'),					
					'AirlinesCode'		=> $this->post('AirlinesCode'),	
					'Dest'				=> $this->post('Dest'),	
					'flightno'			=> $this->post('flightno'),	
					'agenCode'			=> $this->post('agenCode'),	
					'ShipperCode'		=> $this->post('ShipperCode'),	
					'ShipperName'		=> $this->post('ShipperName'),	
					'Pieces'			=> $this->post('Pieces'),	
					'Gross'				=> $this->post('Gross'),	
					'Netto'				=> $this->post('Netto'),					
					'DateOfEntry'		=> $this->post('DateOfEntry'),	
					'TimeOfEntry'		=> $this->post('TimeOfEntry'),	
					'EmployeeCode'		=> $this->post('EmployeeCode'),	
					'FlagReceipt'		=> $this->post('FlagReceipt'),					
					'TypeOfCargo'		=> $this->post('TypeOfCargo'),	
					'TypeOfFlight'		=> $this->post('TypeOfFlight'),
					'TimeOfFlight'		=> $this->post('TimeOfFlight'),
					'_created_by'		=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbcargo_header_edit', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}