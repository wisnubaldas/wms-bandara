<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fsu_dis extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $noid = $this->get('noid');
        if ($noid == '') {
			$data = $this->db2->get('sending_fsu_dis')->result();            
        } else {
            $this->db2->where('noid', $noid);
            $data = $this->db2->get('sending_fsu_dis')->result();
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
					'DayOfDiscrepancy'				=> $this->put('DayOfDiscrepancy'),
					'MonthOfDiscrepancy'			=> $this->put('MonthOfDiscrepancy'),
					'ActualTimeOfGivenStatusEvent'	=> $this->put('ActualTimeOfGivenStatusEvent'),
					'AirportCodeOfDiscrepancy'		=> $this->put('AirportCodeOfDiscrepancy'),
					'CodeOfDiscrepancy'				=> $this->put('CodeOfDiscrepancy'),
					'DiscrepancyNumberOfPieces'		=> $this->put('DiscrepancyNumberOfPieces'),
					'DiscrepancyOfWeight'			=> $this->put('DiscrepancyOfWeight'),
					'OtherServiceInformation1'		=> $this->put('OtherServiceInformation1'),
					'OtherServiceInformation2'		=> $this->put('OtherServiceInformation2'),
					'OtherServiceInformation3'		=> $this->put('OtherServiceInformation3'),
					'MessageSent'					=> $this->put('MessageSent')
					);
					
		$this->db2->where('noid', $noid);
        $update = $this->db2->update('sending_fsu_dis', $data);
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
					'DayOfDiscrepancy'				=> $this->post('DayOfDiscrepancy'),
					'MonthOfDiscrepancy'			=> $this->post('MonthOfDiscrepancy'),
					'ActualTimeOfGivenStatusEvent'	=> $this->post('ActualTimeOfGivenStatusEvent'),
					'AirportCodeOfDiscrepancy'		=> $this->post('AirportCodeOfDiscrepancy'),
					'CodeOfDiscrepancy'				=> $this->post('CodeOfDiscrepancy'),
					'DiscrepancyNumberOfPieces'		=> $this->post('DiscrepancyNumberOfPieces'),
					'DiscrepancyOfWeight'			=> $this->post('DiscrepancyOfWeight'),
					'OtherServiceInformation1'		=> $this->post('OtherServiceInformation1'),
					'OtherServiceInformation2'		=> $this->post('OtherServiceInformation2'),
					'OtherServiceInformation3'		=> $this->post('OtherServiceInformation3'),
					'MessageSent'					=> $this->post('MessageSent')
					);
					
		 $insert = $this->db2->insert('sending_fsu_dis', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}