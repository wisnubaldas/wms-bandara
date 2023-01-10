<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fsu_rcs extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $noid = $this->get('noid');
        if ($noid == '') {
			$data = $this->db2->get('sending_fsu_rcs')->result();            
        } else {
            $this->db2->where('noid', $noid);
            $data = $this->db2->get('sending_fsu_rcs')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$noid = $this->put('noid');
        $data = array(	
					'HostName'						=> $this->put('HostName'),
					'AirlinePrefix'					=> $this->put('AirlinePrefix'),
					'AWBNumber'						=> $this->put('AWBNumber'),
					'OriginCode'					=> $this->put('OriginCode'),
					'DestinationCode'				=> $this->put('DestinationCode'),
					'PartialNumberOfPieces'			=> $this->put('PartialNumberOfPieces'),
					'Weight'						=> $this->put('Weight'),
					'TotalNumberOfPieces'			=> $this->put('TotalNumberOfPieces'),
					'DayOfReceipt'					=> $this->put('DayOfReceipt'),
					'MonthOfReceipt'				=> $this->put('MonthOfReceipt'),
					'ActualTimeOfGivenStatusEvent'	=> $this->put('ActualTimeOfGivenStatusEvent'),
					'AirportCodeOfReceipt'			=> $this->put('AirportCodeOfReceipt'),
					'ShipperName'					=> $this->put('ShipperName'),
					'MessageSent'					=> $this->put('MessageSent')
					);
					
		$this->db2->where('noid', $noid);
        $update = $this->db2->update('sending_fsu_rcs', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'HostName'						=> $this->post('HostName'),
					'AirlinePrefix'					=> $this->post('AirlinePrefix'),
					'AWBNumber'						=> $this->post('AWBNumber'),
					'OriginCode'					=> $this->post('OriginCode'),
					'DestinationCode'				=> $this->post('DestinationCode'),
					'PartialNumberOfPieces'			=> $this->post('PartialNumberOfPieces'),
					'Weight'						=> $this->post('Weight'),
					'TotalNumberOfPieces'			=> $this->post('TotalNumberOfPieces'),
					'DayOfReceipt'					=> $this->post('DayOfReceipt'),
					'MonthOfReceipt'				=> $this->post('MonthOfReceipt'),
					'ActualTimeOfGivenStatusEvent'	=> $this->post('ActualTimeOfGivenStatusEvent'),
					'AirportCodeOfReceipt'			=> $this->post('AirportCodeOfReceipt'),
					'ShipperName'					=> $this->post('ShipperName'),
					'MessageSent'					=> $this->post('MessageSent')
					);
					
		 $insert = $this->db2->insert('sending_fsu_rcs', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}