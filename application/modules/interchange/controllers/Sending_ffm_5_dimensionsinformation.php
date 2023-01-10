<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_ffm_5_dimensionsinformation extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $Noid = $this->get('Noid');
        if ($Noid == '') {
			$data = $this->db2->get('sending_ffm_5_dimensionsinformation')->result();            
        } else {
            $this->db2->where('Noid', $Noid);
            $data = $this->db2->get('sending_ffm_5_dimensionsinformation')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$Noid = $this->put('Noid');
        $data = array(	
					'MessageLineNo'			=> $this->put('MessageLineNo'),
					'LineIdentifier'		=> $this->put('LineIdentifier'),
					'WeightCode'			=> $this->put('WeightCode'),
					'Weight'				=> $this->put('Weight'),
					'MeasurementUnitCode'	=> $this->put('MeasurementUnitCode'),
					'LengthDimension'		=> $this->put('LengthDimension'),
					'WidthDimension'		=> $this->put('WidthDimension'),
					'HeightDimesion'		=> $this->put('HeightDimesion'),
					'NumberOfPieces'		=> $this->put('NumberOfPieces'),
					'MessageKey'			=> $this->put('MessageKey')
					);
					
		$this->db2->where('Noid', $Noid);
        $update = $this->db2->update('sending_ffm_5_dimensionsinformation', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'			=> $this->post('MessageKey'),
					'MessageLineNo'			=> $this->post('MessageLineNo'),
					'LineIdentifier'		=> $this->post('LineIdentifier'),
					'WeightCode'			=> $this->post('WeightCode'),
					'Weight'				=> $this->post('Weight'),
					'MeasurementUnitCode'	=> $this->post('MeasurementUnitCode'),
					'LengthDimension'		=> $this->post('LengthDimension'),
					'WidthDimension'		=> $this->post('WidthDimension'),
					'HeightDimesion'		=> $this->post('HeightDimesion'),
					'NumberOfPieces'		=> $this->post('NumberOfPieces')
					);
					
		 $insert = $this->db2->insert('sending_ffm_5_dimensionsinformation', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}