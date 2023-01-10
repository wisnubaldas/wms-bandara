<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_ffm_a_uldloadedcargo extends REST_Controller {
	
	private $db2;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $Noid = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_ffm_a_uldloadedcargo')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_ffm_a_uldloadedcargo')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'										=> $this->put('MessageLineNo'),
					'LineIdentifier'									=> $this->put('LineIdentifier'),
					'Point_Of_Unloading'								=> $this->put('Point_Of_Unloading'),
					'ULDType'											=> $this->put('ULDType'),
					'ULDSerialNumber'									=> $this->put('ULDSerialNumber'),
					'ULDOwnerCode'										=> $this->put('ULDOwnerCode'),
					'ULDLoadingIndicator'								=> $this->put('ULDLoadingIndicator'),
					'ULDRemarks'										=> $this->put('ULDRemarks'),
					'AirlinePrefix'										=> $this->put('AirlinePrefix'),
					'AWBSerialNumber'									=> $this->put('AWBSerialNumber'),
					'AirportCityCodeOfOrigin'							=> $this->put('AirportCityCodeOfOrigin'),
					'AirportCityCodeOfDestination'						=> $this->put('AirportCityCodeOfDestination'),
					'ShipmentDescriptionCodeOfQuantityDetail'			=> $this->put('ShipmentDescriptionCodeOfQuantityDetail'),
					'NumberOfPiecesOfQuantityDetail'					=> $this->put('NumberOfPiecesOfQuantityDetail'),
					'WeightCode'										=> $this->put('WeightCode'),
					'Weight'											=> $this->put('Weight'),
					'VolumeCode'										=> $this->put('VolumeCode'),
					'VolumeAmount'										=> $this->put('VolumeAmount'),
					'DensityIndicator'									=> $this->put('DensityIndicator'),
					'DensityGroup'										=> $this->put('DensityGroup'),
					'ShipmentDescriptionCodeOfTotalConsignmentPieces'	=> $this->put('ShipmentDescriptionCodeOfTotalConsignmentPieces'),
					'NumberOfPiecesOfTotalConsignmentPieces'			=> $this->put('NumberOfPiecesOfTotalConsignmentPieces'),
					'ManifestDescriptionOfGoods'						=> $this->put('ManifestDescriptionOfGoods'),
					'SpecialHandlingCode1'								=> $this->put('SpecialHandlingCode1'),
					'SpecialHandlingCode2'								=> $this->put('SpecialHandlingCode2'),
					'FlagFormat'										=> $this->put('FlagFormat'),
					'MessageKey'										=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_ffm_a_uldloadedcargo', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'										=> $this->post('MessageKey'),
					'MessageLineNo'										=> $this->post('MessageLineNo'),
					'LineIdentifier'									=> $this->post('LineIdentifier'),
					'Point_Of_Unloading'								=> $this->post('Point_Of_Unloading'),
					'ULDType'											=> $this->post('ULDType'),
					'ULDSerialNumber'									=> $this->post('ULDSerialNumber'),
					'ULDOwnerCode'										=> $this->post('ULDOwnerCode'),
					'ULDLoadingIndicator'								=> $this->post('ULDLoadingIndicator'),
					'ULDRemarks'										=> $this->post('ULDRemarks'),
					'AirlinePrefix'										=> $this->post('AirlinePrefix'),
					'AWBSerialNumber'									=> $this->post('AWBSerialNumber'),
					'AirportCityCodeOfOrigin'							=> $this->post('AirportCityCodeOfOrigin'),
					'AirportCityCodeOfDestination'						=> $this->post('AirportCityCodeOfDestination'),
					'ShipmentDescriptionCodeOfQuantityDetail'			=> $this->post('ShipmentDescriptionCodeOfQuantityDetail'),
					'NumberOfPiecesOfQuantityDetail'					=> $this->post('NumberOfPiecesOfQuantityDetail'),
					'WeightCode'										=> $this->post('WeightCode'),
					'Weight'											=> $this->post('Weight'),
					'VolumeCode'										=> $this->post('VolumeCode'),
					'VolumeAmount'										=> $this->post('VolumeAmount'),
					'DensityIndicator'									=> $this->post('DensityIndicator'),
					'DensityGroup'										=> $this->post('DensityGroup'),
					'ShipmentDescriptionCodeOfTotalConsignmentPieces'	=> $this->post('ShipmentDescriptionCodeOfTotalConsignmentPieces'),
					'NumberOfPiecesOfTotalConsignmentPieces'			=> $this->post('NumberOfPiecesOfTotalConsignmentPieces'),
					'ManifestDescriptionOfGoods'						=> $this->post('ManifestDescriptionOfGoods'),
					'SpecialHandlingCode1'								=> $this->post('SpecialHandlingCode1'),
					'SpecialHandlingCode2'								=> $this->post('SpecialHandlingCode2'),
					'FlagFormat'										=> $this->post('FlagFormat'),
					);
					
		 $insert = $this->db2->insert('sending_ffm_a_uldloadedcargo', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}