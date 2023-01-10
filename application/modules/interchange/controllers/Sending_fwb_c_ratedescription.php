<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fwb_c_ratedescription extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fwb_c_ratedescription')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fwb_c_ratedescription')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'							=> $this->put('MessageLineNo'),
					'LineIdentifier'						=> $this->put('LineIdentifier'),
					'AWBRateLineNumber'						=> $this->put('AWBRateLineNumber'),
					'AWBColumnIdentifierP'					=> $this->put('AWBColumnIdentifierP'),
					'NumberOfPieces'						=> $this->put('NumberOfPieces'),
					'RateCombinationPoint'					=> $this->put('RateCombinationPoint'),
					'WeightCode'							=> $this->put('WeightCode'),
					'WeightGross'							=> $this->put('WeightGross'),
					'AWBColumnIdentifierC'					=> $this->put('AWBColumnIdentifierC'),
					'RateClassCode'							=> $this->put('RateClassCode'),
					'AWBColumnIdentifierS'					=> $this->put('AWBColumnIdentifierS'),
					'CommodityItemNumber'					=> $this->put('CommodityItemNumber'),
					'ULDRateClassType'						=> $this->put('ULDRateClassType'),
					'RateClassCodeBasis'					=> $this->put('RateClassCodeBasis'),
					'ClassRatePercentage'					=> $this->put('ClassRatePercentage'),
					'AWBColumnIdentifierW'					=> $this->put('AWBColumnIdentifierW'),
					'Weight'								=> $this->put('Weight'),
					'AWBColumnIdentifierR'					=> $this->put('AWBColumnIdentifierR'),
					'RateOrCharge'							=> $this->put('RateOrCharge'),
					'Discount'								=> $this->put('Discount'),
					'AWBColumnIdentifierT'					=> $this->put('AWBColumnIdentifierT'),
					'ChargeAmount'							=> $this->put('ChargeAmount'),
					'DiscountAmount'						=> $this->put('DiscountAmount'),
					'AWBColumnIdentifierGoods'				=> $this->put('AWBColumnIdentifierGoods'),
					'GoodsDataIdentifierOfGoods'			=> $this->put('GoodsDataIdentifierOfGoods'),
					'NatureAndQuantityOfGoods'				=> $this->put('NatureAndQuantityOfGoods'),
					'AWBColumnIdentifierConsolidation'		=> $this->put('AWBColumnIdentifierConsolidation'),
					'GoodsDataIdentifierOfConsolidation'	=> $this->put('GoodsDataIdentifierOfConsolidation'),
					'NatureAndQuantityOfConsolidation'		=> $this->put('NatureAndQuantityOfConsolidation'),
					'AWBColumnIdentifierDimensions'			=> $this->put('AWBColumnIdentifierDimensions'),
					'GoodsDataIdentifierOfDimensions'		=> $this->put('GoodsDataIdentifierOfDimensions'),
					'WeightCodeOfDimensions'				=> $this->put('WeightCodeOfDimensions'),
					'WeightOfDimensions'					=> $this->put('WeightOfDimensions'),
					'MeasurementUnitCode'					=> $this->put('MeasurementUnitCode'),
					'NoDimensionsAvailable'					=> $this->put('NoDimensionsAvailable'),
					'LengthOfDimensions'					=> $this->put('LengthOfDimensions'),
					'WidthOfDimensions'						=> $this->put('WidthOfDimensions'),
					'HeightOfDimensions'					=> $this->put('HeightOfDimensions'),
					'NumberOfPiecesDimensions'				=> $this->put('NumberOfPiecesDimensions'),
					'AWBColumnIdentifierVolume'				=> $this->put('AWBColumnIdentifierVolume'),
					'GoodsDataIdentifierOfVolume'			=> $this->put('GoodsDataIdentifierOfVolume'),
					'VolumeCodeOfVolume'					=> $this->put('VolumeCodeOfVolume'),
					'VolumeAmountOfVolume'					=> $this->put('VolumeAmountOfVolume'),
					'AWBColumnIdentifierULD'				=> $this->put('AWBColumnIdentifierULD'),
					'GoodsDataIdentifierOfULD'				=> $this->put('GoodsDataIdentifierOfULD'),
					'ULDType'								=> $this->put('ULDType'),
					'ULDSerialNumber'						=> $this->put('ULDSerialNumber'),
					'ULDOwnerCode'							=> $this->put('ULDOwnerCode'),
					'AWBColumnIdentifierShipper'			=> $this->put('AWBColumnIdentifierShipper'),
					'GoodsDataIdentifierOfShipper'			=> $this->put('GoodsDataIdentifierOfShipper'),
					'SLAC'									=> $this->put('SLAC'),
					'AWBColumnIdentifierHarmonised'			=> $this->put('AWBColumnIdentifierHarmonised'),
					'GoodsDataIdentifierOfHarmonised'		=> $this->put('GoodsDataIdentifierOfHarmonised'),
					'HarmonisedCommodityCode'				=> $this->put('HarmonisedCommodityCode'),
					'AWBColumnIdentifierCountry'			=> $this->put('AWBColumnIdentifierCountry'),
					'GoodsDataIdentifierOfCountry'			=> $this->put('GoodsDataIdentifierOfCountry'),
					'CountryCode'							=> $this->put('CountryCode'),
					'ServiceCode'							=> $this->put('ServiceCode'),
					'MessageKey'							=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fwb_c_ratedescription', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'							=> $this->post('MessageKey'),
					'MessageLineNo'							=> $this->post('MessageLineNo'),
					'LineIdentifier'						=> $this->post('LineIdentifier'),
					'AWBRateLineNumber'						=> $this->post('AWBRateLineNumber'),
					'AWBColumnIdentifierP'					=> $this->post('AWBColumnIdentifierP'),
					'NumberOfPieces'						=> $this->post('NumberOfPieces'),
					'RateCombinationPoint'					=> $this->post('RateCombinationPoint'),
					'WeightCode'							=> $this->post('WeightCode'),
					'WeightGross'							=> $this->post('WeightGross'),
					'AWBColumnIdentifierC'					=> $this->post('AWBColumnIdentifierC'),
					'RateClassCode'							=> $this->post('RateClassCode'),
					'AWBColumnIdentifierS'					=> $this->post('AWBColumnIdentifierS'),
					'CommodityItemNumber'					=> $this->post('CommodityItemNumber'),
					'ULDRateClassType'						=> $this->post('ULDRateClassType'),
					'RateClassCodeBasis'					=> $this->post('RateClassCodeBasis'),
					'ClassRatePercentage'					=> $this->post('ClassRatePercentage'),
					'AWBColumnIdentifierW'					=> $this->post('AWBColumnIdentifierW'),
					'Weight'								=> $this->post('Weight'),
					'AWBColumnIdentifierR'					=> $this->post('AWBColumnIdentifierR'),
					'RateOrCharge'							=> $this->post('RateOrCharge'),
					'Discount'								=> $this->post('Discount'),
					'AWBColumnIdentifierT'					=> $this->post('AWBColumnIdentifierT'),
					'ChargeAmount'							=> $this->post('ChargeAmount'),
					'DiscountAmount'						=> $this->post('DiscountAmount'),
					'AWBColumnIdentifierGoods'				=> $this->post('AWBColumnIdentifierGoods'),
					'GoodsDataIdentifierOfGoods'			=> $this->post('GoodsDataIdentifierOfGoods'),
					'NatureAndQuantityOfGoods'				=> $this->post('NatureAndQuantityOfGoods'),
					'AWBColumnIdentifierConsolidation'		=> $this->post('AWBColumnIdentifierConsolidation'),
					'GoodsDataIdentifierOfConsolidation'	=> $this->post('GoodsDataIdentifierOfConsolidation'),
					'NatureAndQuantityOfConsolidation'		=> $this->post('NatureAndQuantityOfConsolidation'),
					'AWBColumnIdentifierDimensions'			=> $this->post('AWBColumnIdentifierDimensions'),
					'GoodsDataIdentifierOfDimensions'		=> $this->post('GoodsDataIdentifierOfDimensions'),
					'WeightCodeOfDimensions'				=> $this->post('WeightCodeOfDimensions'),
					'WeightOfDimensions'					=> $this->post('WeightOfDimensions'),
					'MeasurementUnitCode'					=> $this->post('MeasurementUnitCode'),
					'NoDimensionsAvailable'					=> $this->post('NoDimensionsAvailable'),
					'LengthOfDimensions'					=> $this->post('LengthOfDimensions'),
					'WidthOfDimensions'						=> $this->post('WidthOfDimensions'),
					'HeightOfDimensions'					=> $this->post('HeightOfDimensions'),
					'NumberOfPiecesDimensions'				=> $this->post('NumberOfPiecesDimensions'),
					'AWBColumnIdentifierVolume'				=> $this->post('AWBColumnIdentifierVolume'),
					'GoodsDataIdentifierOfVolume'			=> $this->post('GoodsDataIdentifierOfVolume'),
					'VolumeCodeOfVolume'					=> $this->post('VolumeCodeOfVolume'),
					'VolumeAmountOfVolume'					=> $this->post('VolumeAmountOfVolume'),
					'AWBColumnIdentifierULD'				=> $this->post('AWBColumnIdentifierULD'),
					'GoodsDataIdentifierOfULD'				=> $this->post('GoodsDataIdentifierOfULD'),
					'ULDType'								=> $this->post('ULDType'),
					'ULDSerialNumber'						=> $this->post('ULDSerialNumber'),
					'ULDOwnerCode'							=> $this->post('ULDOwnerCode'),
					'AWBColumnIdentifierShipper'			=> $this->post('AWBColumnIdentifierShipper'),
					'GoodsDataIdentifierOfShipper'			=> $this->post('GoodsDataIdentifierOfShipper'),
					'SLAC'									=> $this->post('SLAC'),
					'AWBColumnIdentifierHarmonised'			=> $this->post('AWBColumnIdentifierHarmonised'),
					'GoodsDataIdentifierOfHarmonised'		=> $this->post('GoodsDataIdentifierOfHarmonised'),
					'HarmonisedCommodityCode'				=> $this->post('HarmonisedCommodityCode'),
					'AWBColumnIdentifierCountry'			=> $this->post('AWBColumnIdentifierCountry'),
					'GoodsDataIdentifierOfCountry'			=> $this->post('GoodsDataIdentifierOfCountry'),
					'CountryCode'							=> $this->post('CountryCode'),
					'ServiceCode'							=> $this->post('ServiceCode')
					);
					
		 $insert = $this->db2->insert('sending_fwb_c_ratedescription', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}