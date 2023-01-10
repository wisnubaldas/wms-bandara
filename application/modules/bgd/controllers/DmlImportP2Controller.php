<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class DmlImportP2Controller extends REST_Controller {
	function __construct()
    {
        // Construct the parent class
        parent::__construct();
    }
	
	function index_get() {
        $status = $this->get('status');
        if ($status == '') {
			$data = $this->db->get('t_shipment_import')->result();            
        } else {
            $this->db->where('status', $status);
            $data = $this->db->get('t_shipment_import')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$Noid = $this->put('Noid');
        $data = array(		
					'entrydate'			=> $this->put('entrydate'),
					'entrytime'			=> $this->put('entrytime'),
					'mawb'				=> $this->put('mawb'),
					'hawb'				=> $this->put('hawb'),
					'pieces'			=> $this->put('pieces'),
					'weight'			=> $this->put('weight'),
					'airline_code'		=> $this->put('airline_code'),
					'flight_no'			=> $this->put('flight_no'),
					'dateflight'		=> $this->put('dateflight'),
					'ETA_ETD'			=> $this->put('ETA_ETD'),
					'SHIPPER'			=> $this->put('SHIPPER'),
					'CONSIGNEE'			=> $this->put('CONSIGNEE'),
					'AGENT'				=> $this->put('AGENT'),
					'NatureGood'		=> $this->put('NatureGood'),
					'STATUS'			=> $this->put('STATUS'),
					'History'			=> $this->put('History'),
					'Noid'			=> $this->put('Noid')
					);
        $insert = $this->db->insert('t_shipment_import', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {
        $data = array(		
					'entrydate'			=> $this->post('entrydate'),
					'entrytime'			=> $this->post('entrytime'),
					'mawb'				=> $this->post('mawb'),
					'hawb'				=> $this->post('hawb'),
					'pieces'			=> $this->post('pieces'),
					'weight'			=> $this->post('weight'),
					'airline_code'		=> $this->post('airline_code'),
					'flight_no'			=> $this->post('flight_no'),
					'dateflight'		=> $this->post('dateflight'),
					'ETA_ETD'			=> $this->post('ETA_ETD'),
					'SHIPPER'			=> $this->post('SHIPPER'),
					'CONSIGNEE'			=> $this->post('CONSIGNEE'),
					'AGENT'				=> $this->post('AGENT'),
					'NatureGood'		=> $this->post('NatureGood'),
					'STATUS'			=> $this->post('STATUS'),
					'History'			=> $this->post('History')
					);
        $insert = $this->db->insert('t_shipment_import', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	
}