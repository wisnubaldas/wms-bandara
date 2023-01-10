<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fhl_5b_othercustomsecurityandregulatorycontrolinformation extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $Noid = $this->get('Noid');
        if ($Noid == '') {
			$data = $this->db2->get('sending_fhl_othercustomsecurityandregulatorycontrolinformation')->result();            
        } else {
            $this->db2->where('Noid', $Noid);
            $data = $this->db2->get('sending_fhl_othercustomsecurityandregulatorycontrolinformation')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$Noid = $this->put('Noid');
        $data = array(	
					'LineIdentifier'											=> $this->put('LineIdentifier'),
					'HWBSerialNumber'											=> $this->put('HWBSerialNumber'),
					'ISOCountryCode'											=> $this->put('ISOCountryCode'),
					'InformationIdentifier'										=> $this->put('InformationIdentifier'),
					'CustomsSecurityAndRegulatoryControlInformationIdentifier'	=> $this->put('CustomsSecurityAndRegulatoryControlInformationIdentifier'),
					'SupplementaryCustomsSecurityAndRegulatortyCtrlInfo'		=> $this->put('SupplementaryCustomsSecurityAndRegulatortyCtrlInfo'),
					'MessageKey'												=> $this->put('MessageKey')
					);
					
		$this->db2->where('Noid', $Noid);
        $update = $this->db2->update('sending_fhl_othercustomsecurityandregulatorycontrolinformation', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'MessageKey'												=> $this->post('MessageKey'),
					'LineIdentifier'											=> $this->post('LineIdentifier'),
					'HWBSerialNumber'											=> $this->post('HWBSerialNumber'),
					'ISOCountryCode'											=> $this->post('ISOCountryCode'),
					'InformationIdentifier'										=> $this->post('InformationIdentifier'),
					'CustomsSecurityAndRegulatoryControlInformationIdentifier'	=> $this->post('CustomsSecurityAndRegulatoryControlInformationIdentifier'),
					'SupplementaryCustomsSecurityAndRegulatortyCtrlInfo'		=> $this->post('SupplementaryCustomsSecurityAndRegulatortyCtrlInfo')
					);
					
		 $insert = $this->db2->insert('sending_fhl_othercustomsecurityandregulatorycontrolinformation', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}