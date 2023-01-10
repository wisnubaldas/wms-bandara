<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fsu_rcf extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $noid = $this->get('noid');
        if ($noid == '') {
			$data = $this->db2->get('sending_fsu_rcf')->result();            
        } else {
            $this->db2->where('noid', $noid);
            $data = $this->db2->get('sending_fsu_rcf')->result();
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
					'CarrierCode'					=> $this->put('CarrierCode'),
					'FlightNumber'					=> $this->put('FlightNumber'),
					'DayOfArrival'					=> $this->put('DayOfArrival'),
					'MonthOfArrival'				=> $this->put('MonthOfArrival'),
					'ActualTimeOfGivenStatusEvent'	=> $this->put('ActualTimeOfGivenStatusEvent'),
					'AirportCodeOfArrival'			=> $this->put('AirportCodeOfArrival'),
					'TimeOfDeparture'				=> $this->put('TimeOfDeparture'),
					'TimeOfArrival'					=> $this->put('TimeOfArrival'),
					'MessageSent'					=> $this->put('MessageSent'),
					'noid'							=> $this->put('noid')
					);
					
		$this->db2->where('noid', $noid);
        $update = $this->db2->update('sending_fsu_rcf', $data);
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
					'CarrierCode'					=> $this->post('CarrierCode'),
					'FlightNumber'					=> $this->post('FlightNumber'),
					'DayOfArrival'					=> $this->post('DayOfArrival'),
					'MonthOfArrival'				=> $this->post('MonthOfArrival'),
					'ActualTimeOfGivenStatusEvent'	=> $this->post('ActualTimeOfGivenStatusEvent'),
					'AirportCodeOfArrival'			=> $this->post('AirportCodeOfArrival'),
					'TimeOfDeparture'				=> $this->post('TimeOfDeparture'),
					'TimeOfArrival'					=> $this->post('TimeOfArrival'),
					'MessageSent'					=> $this->post('MessageSent')
					);
					
		 $insert = $this->db2->insert('sending_fsu_rcf', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}