<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_ffm_7_uldmovementinformation extends REST_Controller {
	
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $Noid = $this->get('Noid');
        if ($Noid == '') {
			$data = $this->db2->get('sending_ffm_7_uldmovementinformation')->result();            
        } else {
            $this->db2->where('Noid', $Noid);
            $data = $this->db2->get('sending_ffm_7_uldmovementinformation')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$Noid = $this->put('Noid');
        $data = array(	
					'MessageLineNo'					=> $this->put('MessageLineNo'),
					'AirportCodeOfNextDestination'	=> $this->put('AirportCodeOfNextDestination'),
					'CarrierCode'					=> $this->put('CarrierCode'),
					'FlightNumber'					=> $this->put('FlightNumber'),
					'DayOfScheduleDeparture'		=> $this->put('DayOfScheduleDeparture'),
					'MonthOfScheduleDeparture'		=> $this->put('MonthOfScheduleDeparture'),
					'ULDVolumeAvailableCode'		=> $this->put('ULDVolumeAvailableCode'),
					'MessageKey'					=> $this->put('MessageKey')
					);
					
		$this->db2->where('Noid', $Noid);
        $update = $this->db2->update('sending_ffm_7_uldmovementinformation', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'					=> $this->post('MessageKey'),
					'MessageLineNo'					=> $this->post('MessageLineNo'),
					'AirportCodeOfNextDestination'	=> $this->post('AirportCodeOfNextDestination'),
					'CarrierCode'					=> $this->post('CarrierCode'),
					'FlightNumber'					=> $this->post('FlightNumber'),
					'DayOfScheduleDeparture'		=> $this->post('DayOfScheduleDeparture'),
					'MonthOfScheduleDeparture'		=> $this->post('MonthOfScheduleDeparture'),
					'ULDVolumeAvailableCode'		=> $this->post('ULDVolumeAvailableCode')
					);
					
		 $insert = $this->db2->insert('sending_ffm_7_uldmovementinformation', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}