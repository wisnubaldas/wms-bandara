<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require APPPATH . 'libraries/REST_Controller.php';

class Dbreceipt_detail_edit extends REST_Controller {
	
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
			$data = $this->db6->get('dbreceipt_detail_edit')->result();            
        } else {
            $this->db6->where('_id', $_id);
            $data = $this->db6->get('dbreceipt_detail_edit')->result();
        }
        $this->response($data, 200);
    }
	
	function index_put() {
		$_id = $this->put('_id');
        $data = array(	
					'receipt'			=> $this->put('receipt'),
					'CWPnumber'			=> $this->put('CWPnumber'),	
					'CSDNumber'			=> $this->put('CSDNumber'),	
					'Pieces'			=> $this->put('Pieces'),	
					'Gross'				=> $this->put('Gross'),	
					'Netto'				=> $this->put('Netto'),	
					'Price'				=> $this->put('Price'),	
					'TotalPrice'		=> $this->put('TotalPrice'),	
					'Tax'				=> $this->put('Tax'),	
					'GrandTotal'		=> $this->put('GrandTotal'),	
					'Origin'			=> $this->put('Origin'),	
					'Destination'		=> $this->put('Destination'),	
					'AirlinesCode'		=> $this->put('AirlinesCode'),	
					'HostAWB'			=> $this->put('HostAWB'),						
					'NameOfDo'			=> $this->put('NameOfDo'),	
					'Discount'			=> $this->put('Discount'),	
					'TotalDiscount'		=> $this->put('TotalDiscount'),	
					'Refund'			=> $this->put('Refund'),	
					'TotalRefund'		=> $this->put('TotalRefund'),	
					'ContentsGood'		=> $this->put('ContentsGood'),	
					'id_header'			=> $this->put('id_header'),
					'_updated_by'		=> $this->put('_updated_by'),	
					'_id'				=> $this->put('_id')					
					);
					
		$this->db6->where('_id', $_id);
        $update = $this->db6->update('dbreceipt_detail_edit', $data);
        if ($update) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
	
	function index_post() {		
        $data = array(		
					'receipt'			=> $this->post('receipt'),
					'CWPnumber'			=> $this->post('CWPnumber'),	
					'CSDNumber'			=> $this->post('CSDNumber'),	
					'Pieces'			=> $this->post('Pieces'),	
					'Gross'				=> $this->post('Gross'),	
					'Netto'				=> $this->post('Netto'),	
					'Price'				=> $this->post('Price'),	
					'TotalPrice'		=> $this->post('TotalPrice'),	
					'Tax'				=> $this->post('Tax'),	
					'GrandTotal'		=> $this->post('GrandTotal'),	
					'Origin'			=> $this->post('Origin'),	
					'Destination'		=> $this->post('Destination'),	
					'AirlinesCode'		=> $this->post('AirlinesCode'),	
					'HostAWB'			=> $this->post('HostAWB'),					
					'NameOfDo'			=> $this->post('NameOfDo'),	
					'Discount'			=> $this->post('Discount'),	
					'TotalDiscount'		=> $this->post('TotalDiscount'),	
					'Refund'			=> $this->post('Refund'),	
					'TotalRefund'		=> $this->post('TotalRefund'),	
					'ContentsGood'		=> $this->post('ContentsGood'),
					'_created_by'		=> $this->post('_created_by')
					);
					
		 $insert = $this->db6->insert('dbreceipt_detail_edit', $data);
        if ($insert) {
            $this->response($data, 200);
        } else {
            $this->response(array('status' => 'fail', 502));
        }
	}
}