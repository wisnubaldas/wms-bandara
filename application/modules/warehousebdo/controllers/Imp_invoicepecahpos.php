<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Imp_invoicepecahpos extends REST_Controller {
	
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db = $this->load->database('rdwarehouse_bdo', TRUE);
	}
	
	function index_get() {
        $noid = $this->get('noid');
        if ($noid == '') {
			$data = $this->db->get('imp_invoicepecahpos')->result();            
        } else {
            $this->db->where('noid', $noid);
            $data = $this->db->get('imp_invoicepecahpos')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$noid = $this->put('noid');
        $data = array(	
					'MasterAWB'				=> $this->put('MasterAWB'),
					'TotalHost'				=> $this->put('TotalHost'),
					'HostFee'				=> $this->put('HostFee'),
					'TotalFee'				=> $this->put('TotalFee'),
					'DateOfTransaction'		=> $this->put('DateOfTransaction'),
					'TimeOfTransaction'		=> $this->put('TimeOfTransaction'),
					'PaymentCode'			=> $this->put('PaymentCode'),
					'AgreementCode'			=> $this->put('AgreementCode'),
					'CustomerCode'			=> $this->put('CustomerCode'),
					'CustomerPIC'			=> $this->put('CustomerPIC'),
					'EmployeeNumber'		=> $this->put('EmployeeNumber'),
					'DRSCNumber'			=> $this->put('DRSCNumber'),
					'ShiftCode'				=> $this->put('ShiftCode'),
					'token'					=> $this->put('token'),
					'InvoiceNumber'			=> $this->put('InvoiceNumber')
					);
		$this->db->where('noid', $noid);
        $update = $this->db->update('imp_invoicepecahpos', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'InvoiceNumber'			=> $this->post('InvoiceNumber'),
					'MasterAWB'				=> $this->post('MasterAWB'),
					'TotalHost'				=> $this->post('TotalHost'),
					'HostFee'				=> $this->post('HostFee'),
					'TotalFee'				=> $this->post('TotalFee'),
					'DateOfTransaction'		=> $this->post('DateOfTransaction'),
					'TimeOfTransaction'		=> $this->post('TimeOfTransaction'),
					'PaymentCode'			=> $this->post('PaymentCode'),
					'AgreementCode'			=> $this->post('AgreementCode'),
					'CustomerCode'			=> $this->post('CustomerCode'),
					'CustomerPIC'			=> $this->post('CustomerPIC'),
					'EmployeeNumber'		=> $this->post('EmployeeNumber'),
					'DRSCNumber'			=> $this->post('DRSCNumber'),
					'ShiftCode'				=> $this->post('ShiftCode'),
					'token'					=> $this->post('token')
					);
					
		 $insert = $this->db->insert('imp_invoicepecahpos', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}