<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbreceipt_header_edit extends REST_Controller {
	
	private $db6;
	function __construct()
	{
		// Construct the parent class
		parent::__construct();
		$this->db6 = $this->load->database('dbmscargo', TRUE);
	}
	
	function index_get() {
        $_id = $this->get('_id');
        if ($_id == '') {
			$data = $this->db6->get('dbreceipt_header')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbreceipt_header')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'receiptType'			=> $this->put('receiptType'),											
					'ClientRegistration'	=> $this->put('ClientRegistration'),	
					'ReceiverName'			=> $this->put('ReceiverName'),	
					'EmployeeCode'			=> $this->put('EmployeeCode'),	
					'DateOfReceipt'			=> $this->put('DateOfReceipt'),	
					'TimeOfReceipt'			=> $this->put('TimeOfReceipt'),	
					'DRSCnumber'			=> $this->put('DRSCnumber'),	
					'PaymentFlag'			=> $this->put('PaymentFlag'),	
					'FakturNumber'			=> $this->put('FakturNumber'),	
					'DateOfFaktur'			=> $this->put('DateOfFaktur'),	
					'TimeOfFaktur'			=> $this->put('TimeOfFaktur'),	
					'PaymentCode'			=> $this->put('PaymentCode'),	
					'StampFee'				=> $this->put('StampFee'),	
					'UserVoid'				=> $this->put('UserVoid'),	
					'DateOfVoid'			=> $this->put('DateOfVoid'),	
					'TimeOfVoid'			=> $this->put('TimeOfVoid'),	
					'Description'			=> $this->put('Description'),	
					'PayCode'				=> $this->put('PayCode'),	
					'CodeAgen'				=> $this->put('CodeAgen'),	
					'EmployeeName'			=> $this->put('EmployeeName'),	
					'receipt'				=> $this->put('receipt'),
					'_updated_by'			=> $this->put('_updated_by'),	
					'_id'					=> $this->put('_id')
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbreceipt_header_edit', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'receipt'				=> $this->post('receipt'),					
					'receiptType'			=> $this->post('receiptType'),									
					'ClientRegistration'	=> $this->post('ClientRegistration'),	
					'ReceiverName'			=> $this->post('ReceiverName'),	
					'EmployeeCode'			=> $this->post('EmployeeCode'),	
					'DateOfReceipt'			=> $this->post('DateOfReceipt'),	
					'TimeOfReceipt'			=> $this->post('TimeOfReceipt'),	
					'DRSCnumber'			=> $this->post('DRSCnumber'),	
					'PaymentFlag'			=> $this->post('PaymentFlag'),	
					'FakturNumber'			=> $this->post('FakturNumber'),	
					'DateOfFaktur'			=> $this->post('DateOfFaktur'),	
					'TimeOfFaktur'			=> $this->post('TimeOfFaktur'),	
					'PaymentCode'			=> $this->post('PaymentCode'),	
					'StampFee'				=> $this->post('StampFee'),	
					'UserVoid'				=> $this->post('UserVoid'),	
					'DateOfVoid'			=> $this->post('DateOfVoid'),	
					'TimeOfVoid'			=> $this->post('TimeOfVoid'),	
					'Description'			=> $this->post('Description'),	
					'PayCode'				=> $this->post('PayCode'),	
					'CodeAgen'				=> $this->post('CodeAgen'),	
					'EmployeeName'			=> $this->post('EmployeeName'),
					'_created_by'			=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbreceipt_header_edit', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}