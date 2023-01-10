<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fwb_2_awbconsignmentdetails extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fwb_2_awbconsignmentdetails')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fwb_2_awbconsignmentdetails')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'				=> $this->put('MessageLineNo'),
					'AirlinePrefix'				=> $this->put('AirlinePrefix'),
					'AWBNumber'					=> $this->put('AWBNumber'),
					'OriginCode'				=> $this->put('OriginCode'),
					'DestinationCode'			=> $this->put('DestinationCode'),
					'ShipmentDescriptionCode'	=> $this->put('ShipmentDescriptionCode'),
					'NumberOfPieces'			=> $this->put('NumberOfPieces'),
					'WeightCode'				=> $this->put('WeightCode'),
					'Weight'					=> $this->put('Weight'),
					'VolumeCode'				=> $this->put('VolumeCode'),
					'VolumeAmount'				=> $this->put('VolumeAmount'),
					'DensityIndicator'			=> $this->put('DensityIndicator'),
					'DensityGroup'				=> $this->put('DensityGroup'),
					'MessageKey'				=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fwb_2_awbconsignmentdetails', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'				=> $this->post('MessageKey'),
					'MessageLineNo'				=> $this->post('MessageLineNo'),
					'AirlinePrefix'				=> $this->post('AirlinePrefix'),
					'AWBNumber'					=> $this->post('AWBNumber'),
					'OriginCode'				=> $this->post('OriginCode'),
					'DestinationCode'			=> $this->post('DestinationCode'),
					'ShipmentDescriptionCode'	=> $this->post('ShipmentDescriptionCode'),
					'NumberOfPieces'			=> $this->post('NumberOfPieces'),
					'WeightCode'				=> $this->post('WeightCode'),
					'Weight'					=> $this->post('Weight'),
					'VolumeCode'				=> $this->post('VolumeCode'),
					'VolumeAmount'				=> $this->post('VolumeAmount'),
					'DensityIndicator'			=> $this->post('DensityIndicator'),
					'DensityGroup'				=> $this->post('DensityGroup')
					);
					
		 $insert = $this->db2->insert('sending_fwb_2_awbconsignmentdetails', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}