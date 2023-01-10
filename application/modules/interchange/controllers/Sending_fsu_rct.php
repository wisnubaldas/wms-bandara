<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fsu_rct extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $noid = $this->get('noid');
        if ($noid == '') {
			$data = $this->db2->get('sending_fsu_rct')->result();            
        } else {
            $this->db2->where('noid', $noid);
            $data = $this->db2->get('sending_fsu_rct')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$noid = $this->put('noid');
        $data = array(	
					'HostName'							=> $this->put('HostName'),
					'AirlinePrefix'						=> $this->put('AirlinePrefix'),
					'AWBNumber'							=> $this->put('AWBNumber'),
					'OriginCode'						=> $this->put('OriginCode'),
					'DestinationCode'					=> $this->put('DestinationCode'),
					'PartialNumberOfPieces'				=> $this->put('PartialNumberOfPieces'),
					'Weight'							=> $this->put('Weight'),
					'TotalNumberOfPieces'				=> $this->put('TotalNumberOfPieces'),
					'CarrierCodeOfTransferringCarrier'	=> $this->put('CarrierCodeOfTransferringCarrier'),
					'DayOfTransfer'						=> $this->put('DayOfTransfer'),
					'MonthOfTransfer'					=> $this->put('MonthOfTransfer'),
					'ActualTimeOfGivenStatusEvent'		=> $this->put('ActualTimeOfGivenStatusEvent'),
					'AirportCodeOfTransfer'				=> $this->put('AirportCodeOfTransfer'),
					'MessageSent'						=> $this->put('MessageSent')
					);
					
		$this->db2->where('noid', $noid);
        $update = $this->db2->update('sending_fsu_rct', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'HostName'							=> $this->post('HostName'),
					'AirlinePrefix'						=> $this->post('AirlinePrefix'),
					'AWBNumber'							=> $this->post('AWBNumber'),
					'OriginCode'						=> $this->post('OriginCode'),
					'DestinationCode'					=> $this->post('DestinationCode'),
					'PartialNumberOfPieces'				=> $this->post('PartialNumberOfPieces'),
					'Weight'							=> $this->post('Weight'),
					'TotalNumberOfPieces'				=> $this->post('TotalNumberOfPieces'),
					'CarrierCodeOfTransferringCarrier'	=> $this->post('CarrierCodeOfTransferringCarrier'),
					'DayOfTransfer'						=> $this->post('DayOfTransfer'),
					'MonthOfTransfer'					=> $this->post('MonthOfTransfer'),
					'ActualTimeOfGivenStatusEvent'		=> $this->post('ActualTimeOfGivenStatusEvent'),
					'AirportCodeOfTransfer'				=> $this->post('AirportCodeOfTransfer'),
					'MessageSent'						=> $this->post('MessageSent')
					);
					
		 $insert = $this->db2->insert('sending_fsu_rct', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}