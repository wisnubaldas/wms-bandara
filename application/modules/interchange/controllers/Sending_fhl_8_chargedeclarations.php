<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Sending_fhl_8_chargedeclarations extends REST_Controller {
	
	 
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db2 = $this->load->database('rdinterchangemessage', TRUE);	
	}
	
	function index_get() {
        $id = $this->get('id');
        if ($id == '') {
			$data = $this->db2->get('sending_fhl_8_chargedeclarations')->result();            
        } else {
            $this->db2->where('id', $id);
            $data = $this->db2->get('sending_fhl_8_chargedeclarations')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$id = $this->put('id');
        $data = array(	
					'MessageLineNo'				=> $this->put('MessageLineNo'),
					'LineIdentifier'			=> $this->put('LineIdentifier'),
					'CountryCode'				=> $this->put('CountryCode'),
					'WeightValuation'			=> $this->put('WeightValuation'),
					'OtherCharges'				=> $this->put('OtherCharges'),
					'DeclaredValueForCarriage'	=> $this->put('DeclaredValueForCarriage'),
					'NoValueDeclared'			=> $this->put('NoValueDeclared'),
					'DeclaredValueForCustoms'	=> $this->put('DeclaredValueForCustoms'),
					'NoCustomsValue'			=> $this->put('NoCustomsValue'),
					'AmountOfInsurance'			=> $this->put('AmountOfInsurance'),
					'NoValue'					=> $this->put('NoValue'),
					'MessageKey'				=> $this->put('MessageKey')
					);
					
		$this->db2->where('id', $id);
        $update = $this->db2->update('sending_fhl_8_chargedeclarations', $data);
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
					'LineIdentifier'				=> $this->post('LineIdentifier'),
					'CountryCode'					=> $this->post('CountryCode'),
					'WeightValuation'				=> $this->post('WeightValuation'),
					'OtherCharges'					=> $this->post('OtherCharges'),
					'DeclaredValueForCarriage'		=> $this->post('DeclaredValueForCarriage'),
					'NoValueDeclared'				=> $this->post('NoValueDeclared'),
					'DeclaredValueForCustoms'		=> $this->post('DeclaredValueForCustoms'),
					'NoCustomsValue'				=> $this->post('NoCustomsValue'),
					'AmountOfInsurance'				=> $this->post('AmountOfInsurance'),
					'NoValue'						=> $this->post('NoValue')
					);
		
		 $insert = $this->db2->insert('sending_fhl_8_chargedeclarations', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}