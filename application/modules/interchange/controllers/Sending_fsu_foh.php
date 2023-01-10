<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fsu_foh extends REST_Controller {
	
	private $db;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $noid = $this->get('noid');
        if ($noid == '') {
			$data = $this->db2->get('sending_fsu_foh')->result();            
        } else {
            $this->db2->where('noid', $noid);
            $data = $this->db2->get('sending_fsu_foh')->result();
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
					'ActualTimeofGivenStatusEvent'	=> $this->put('ActualTimeofGivenStatusEvent'),
					'AirportCodeOfReceipt'			=> $this->put('AirportCodeOfReceipt'),
					'ShipperName'					=> $this->put('ShipperName'),
					'VolumeCode'					=> $this->put('VolumeCode'),
					'VolumeAmount'					=> $this->put('VolumeAmount'),
					'DensityIndicator'				=> $this->put('DensityIndicator'),
					'DensityGroup'					=> $this->put('DensityGroup'),
					'MessageSent'					=> $this->put('MessageSent')
					);
					
		$this->db2->where('noid', $noid);
        $update = $this->db2->update('sending_fsu_foh', $data);
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
					'ActualTimeofGivenStatusEvent'	=> $this->post('ActualTimeofGivenStatusEvent'),
					'AirportCodeOfReceipt'			=> $this->post('AirportCodeOfReceipt'),
					'ShipperName'					=> $this->post('ShipperName'),
					'VolumeCode'					=> $this->post('VolumeCode'),
					'VolumeAmount'					=> $this->post('VolumeAmount'),
					'DensityIndicator'				=> $this->post('DensityIndicator'),
					'DensityGroup'					=> $this->post('DensityGroup'),
					'MessageSent'					=> $this->post('MessageSent')
					);
					
		 $insert = $this->db2->insert('sending_fsu_foh', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}